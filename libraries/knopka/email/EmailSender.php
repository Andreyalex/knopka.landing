<?php
/**
 * Created by PhpStorm.
 * User: andreyalek
 * Date: 10.05.21
 * Time: 22:10
 */


class EmailSender
{
    public static function sendQuizTo($recipient, $data)
    {
        $lang = JFactory::getLanguage();
        $extension = 'com_quiz';
        $base_dir = JPATH_ROOT.'/components/com_quiz';
        $lang->load($extension, $base_dir);

        $body = file_get_contents(__DIR__ . "/templates/QuizResultsToLead.html");

        $p = '<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">';

        list($void1, $void2, $questions, $void3, $results) = explode("---", $data);


        $qBody = '';
        $idx = 1;
        foreach (explode("\n", trim($questions)) as $item) {
            list($question, $answer) = explode(' >>> ', trim($item));
            $qBody .= '<h3>' . JText::_('COM_QUIZ_VOPROS') . ' №' . $idx . "</h3>\n";
            $qBody .= $p . $question . "</p>\n";
            $qBody .= $p . '<b>' . JText::_('COM_QUIZ_OTVET') . ':</b> ' . $answer . "</p>\n";
            $idx++;
        }

        $rBody = '';
        $idx = 0;
        foreach (explode("\n", trim($results)) as $item) {
            list($way, $desc) = explode(" >>> ", trim($item));
            $rBody .= '<h3>' . $way . "</h3>\n";
            $rBody .= $p . $desc . "</p>\n";
            $idx++;
        }

        $body = str_replace('{TITLE_PLACEHOLDER}', JText::_('COM_QUIZ_QUIZEMAILTITLE'), $body);
        $body = str_replace('{HEADER_PLACEHOLDER}', JText::_('COM_QUIZ_QUIZEMAILHEADER'), $body);
        $body = str_replace('{QUESTIONS_HEADER_PLACEHOLDER}', JText::_('COM_QUIZ_QUIZQUESTIONSEMAILHEADER'), $body);
        $body = str_replace('{QUESTIONS_PLACEHOLDER}', $qBody, $body);
        $body = str_replace('{RESULTS_HEADER_PLACEHOLDER}', $idx > 1? JText::_('COM_QUIZ_ISHODYAIZVASHIHOTVETOV_MULTI') : JText::_('COM_QUIZ_ISHODYAIZVASHIHOTVETOV_SINGLE'), $body);
        $body = str_replace('{RESULTS_PLACEHOLDER}', $rBody, $body);
        $body = str_replace('{FINAL_WORD_PLACEHOLDER}', JText::_('COM_QUIZ_QUIZEMAILFINALWORD'), $body);
        $body = str_replace('{BYE_PLACEHOLDER}', JText::_('COM_QUIZ_QUIZEMAILBYE'), $body);

        return self::sendTo($recipient, $body, JText::_('COM_QUIZ_QUIZMAILSUBJECT'));

    }

    public static function sendTo($recipient, $body, $subject)
    {
        $mailer = JFactory::getMailer();

        $config = JFactory::getConfig();
        $sender = array(
            $config->get('mailfrom'),
            $config->get('fromname')
        );

        $mailer->setSender($sender);

        $mailer->addRecipient($recipient);

        $mailer->isHtml(true);
        $mailer->Encoding = 'base64';
        $mailer->setBody($body);
        $mailer->setSubject($subject);

        return $mailer->Send();
    }
}