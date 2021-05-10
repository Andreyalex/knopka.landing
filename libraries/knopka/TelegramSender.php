<?php
/**
 * Created by PhpStorm.
 * User: andreyalek
 * Date: 07.03.21
 * Time: 22:10
 */


class TelegramSender
{
    public static function sendToOwner($data)
    {
        $config = JFactory::getConfig();
        $chatId = $config->get('tg_owner_chat_id');

        if ($chatId) {

            $text = "А тем временем у нас новый лид на Knopka.Agency!\n\n" .
                '<b>Имя</b>: ' . htmlspecialchars($data['name']) . "\n" .
                '<b>Имейл</b>: ' . htmlspecialchars($data['email']) . "\n" .
                '<b>Телефон</b>: ' . htmlspecialchars($data['tel_3']);

            if (isset($data['textarea_4'])) {
                $text .= "\n\n" . '<b>Прошел квиз:</b>' . "\n" .
                      htmlspecialchars($data['results']);
            }

            $result = self::sendTo($text, $chatId);

            $json = json_decode($result, true);
            return isset($json['ok']) && $json['ok'] === true;
        }
    }

    public static function sendToAdmin($text)
    {
        $config = JFactory::getConfig();
        $chatId = $config->get('tg_admin_chat_id');

        if ($chatId) {
            $result = self::sendTo(htmlspecialchars($text), $chatId);
            $json = json_decode($result, true);
            return isset($json['ok']) && $json['ok'] === true;
        }
    }

    protected static function sendTo($text, $chatId)
    {
        $config = JFactory::getConfig();

        $token = $config->get('tg_bot_token');

        $url = 'https://api.telegram.org/bot'.$token.'/sendMessage';

        $postdata = http_build_query(
            array(
                'chat_id' => $chatId,
                'text' => $text,
                'parse_mode' => 'HTML'
            )
        );

        $opts = array(
            'http' => array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );

        $context  = stream_context_create($opts);
        $result = @file_get_contents($url, false, $context);

        return $result;
    }
}