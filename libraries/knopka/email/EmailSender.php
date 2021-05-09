<?php
/**
 * Created by PhpStorm.
 * User: andreyalek
 * Date: 10.05.21
 * Time: 22:10
 */


class EmailSender
{
    public static function sendToLead($recipient, $data, $templateName)
    {
        $mailer = JFactory::getMailer();

        $config = JFactory::getConfig();
        $sender = array(
            $config->get('mailfrom'),
            $config->get('fromname')
        );

        $mailer->setSender($sender);

        $mailer->addRecipient($recipient);

        $body = file_get_contents(__DIR__ . "/templates/{$templateName}.html");
        $body = str_replace('{DATA_PLACEHOLDER}', $data, $body);
        $mailer->setSubject('Результаты вашего опроса на knopka.agency');
        $mailer->isHtml(true);
        $mailer->Encoding = 'base64';
        $mailer->setBody($body);
        $mailer->Send();
    }
}