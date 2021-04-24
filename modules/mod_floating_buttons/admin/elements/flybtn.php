<?php

/**
 * @copyright	Copyright © 2018 - All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @author	https://templateplazza.com
 */

defined('JPATH_BASE') or die;
jimport('joomla.form.formfield');

/* adding additional javascript and css loads to the  template backend */

class JFormFieldFlybtn extends JFormField {
protected $type = 'flybtn';
protected function getInput() {
    $doc = JFactory::getDocument();
	$doc->addStyleSheet(JURI::root() .'/modules/mod_floating_buttons/admin/assets/css/admin.css');
    return null;
	}
}

?>