<?php

/**
 * @package         Convert Forms
 * @version         2.7.5 Free
 * 
 * @author          Tassos Marinos <info@tassos.gr>
 * @link            http://www.tassos.gr
 * @copyright       Copyright © 2020 Tassos Marinos All Rights Reserved
 * @license         GNU GPLv3 <http://www.gnu.org/licenses/gpl.html> or later
*/

namespace ConvertForms;

use ConvertForms\Helper;
use ConvertForms\Form;

defined('_JEXEC') or die();

class SmartTags
{
    public static function replace($string, $submission = null, $form_id = null)
    {
        // Setup Submission Tags
        $localTagsGroups = [];

        if (is_object($submission))
        {
            $form_id = is_null($form_id) ? $submission->form_id : $form_id;
            $localTagsGroups = array_merge($localTagsGroups, Submission::getSmartTags($submission));
        }

        $localTagsGroups['submissions']['count'] = $form_id ? Helper::getFormLeadsCount($form_id) : '0';

        // Add Submission Tags to collection
        $smartTags = new \NRFramework\SmartTags();
        foreach ($localTagsGroups as $key => $localTagsGroup)
        {
            $prefix = empty($key) ? null : $key . '.';
            $smartTags->add($localTagsGroup, $prefix);
        }

        $result = $smartTags->replace($string);

        // Temporary fix for duplicate site URL.
        $result = self::fixDuplicateSiteURL($result);
        
        return $result;
    }

    /**
     *  In TinyMCE we are forcing absolute URLs (relative_urls=false). This means that the editors prefixes all 'src' and 'href' properties 
     *  with the site's base URL. If we try to use a File Upload Field Smart Tag in a link like in the example below:
     *  
     *  <a href="{field.myuploadfield}">Download File</a>
     * 
     *  The editor will transform the link into
     * 
     *  <a href="http://www.mysite.com/{field.myuploadfield}">Download File</a>
     * 
     *  Given the File Upload field stores the full absolute URL in the database we are end up with invalid URLs, like in the example below:
     *  
     *  http://www.site.com/http://www.site.com/images/uploaded_file.png
     *   
     *  The line below is a temporary and dirty solution to our problem.
     * 
     *  We may need to consider storing just the path of the uploaded file to the database instead. Eg: images/path/file.png
     * 
     *  Update: Since v2.7.4, even though we now store only the relative path in the database, this issue is not resolved as the relative path
     *  is transformed into an absolute URL by the prepareValue() method before the value arrives in this method.
     *
     * @param  string $string
     *
     * @return string
     */
    private static function fixDuplicateSiteURL($subject)
    {
        if (is_string($subject) && strpos($subject, 'http') !== false)
        {
            $domain = \JFactory::getApplication()->input->server->get('HTTP_HOST', '', 'STRING');
            /**
             * $domain returns www.site.com
             * The regex below will not be able to find the duplicate URL given the $subject:
             * https://site.com/https://www.site.com/path/to/file
             * Once we drop the "www." part from $domain, we will be able to successfully find and replace the duplicate URL.
             */
            $domain = str_replace('www.', '', $domain);
            return preg_replace('#http(s)?:\/\/(.*?)' . $domain . '(.*?)\/http#', 'http', $subject);
        }

        if (is_array($subject))
        {
            foreach ($subject as $key => &$item)
            {
                if (!is_string($item))
                {
                    continue;
                }
    
                $item = self::fixDuplicateSiteURL($item);
            }
        }

        return $subject;
    }
}

?>