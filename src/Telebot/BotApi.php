<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 9:13 PM
 */

namespace Telebot;

use Telebot\JsonMapper\JsonMapper;

class BotApi {

    const PARSE_MODE_MARKDOWN = "Markdown";
    const PARSE_MODE_HTML = "HTML";

    protected $api_url = "https://api.telegram.org/bot{{token}}";

    public function __construct($token) {
        $this->api_url = str_replace('{{token}}', $token, $this->api_url);
    }

    /**
     * @return Response
     * @throws \JsonMapper_Exception
     */
    public function getMe() {
        $botInfo = $this->performMethod('getMe', User::class);

        return $botInfo;
    }

    /**
     * @param $chat_id
     * @param $text
     * @param null $parse_mode
     * @param null $disable_web_page_preview
     * @param null $reply_to_message_id
     * @param ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply $reply_markup
     *
     * @return Response
     */
    public function sendMessage($chat_id, $text, $parse_mode = null,
                                $disable_web_page_preview = null,
                                $reply_to_message_id = null,
                                $reply_markup = null) {
        $params = [
            'chat_id' => $chat_id,
            'text' => $text,
            'parse_mode' => $parse_mode,
            'disable_web_page_preview' => $disable_web_page_preview,
            'reply_to_message_id' => $reply_to_message_id,
            'reply_markup' => $reply_markup ? ReplyMarkup::encode($reply_markup) : null,
        ];

        $update = $this->performMethod('sendMessage', Message::class, $params);

        return $update;
    }

    /**
     * @param $chat_id
     * @param $from_chat_id
     * @param $message_id
     *
     * @return Response
     */
    public function forwardMessage($chat_id, $from_chat_id, $message_id) {
        $params = [
            'chat_id' => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_id' => $message_id,
        ];

        $update = $this->performMethod('forwardMessage', Message::class, $params);

        return $update;
    }

    /**
     * @param $method
     * @param $resultClass
     * @param array $args
     *
     * @return Response
     * @throws \JsonMapper_Exception
     */
    protected function performMethod($method, $resultClass, $args = []) {
        $end_point = $this->api_url . '/' . $method;

        if (empty($args)) {
            $content_type = 'Content-type: application/x-www-form-urlencoded';
            $content = null;
        } else {
            $multipart_boundary = uniqid('---Telebot_FromBoundary');
            $content_type = 'Content-type: multipart/form-data'
                . '; boundary=' . $multipart_boundary;

            $content = self::renderFormDataContent($args, $multipart_boundary);
        }

        // Setting a custom stream context,
        $context = stream_context_create([
            'http' => [
                // To ignore http errors and return the response result anyway
                'ignore_errors' => true,
                'method' => 'POST',
                'header' => $content_type,
                'content' => $content,
            ],
        ]);

        // Call telegram api, and return the response
        $responseText = file_get_contents($end_point, false, $context);

        $response = JsonMapper::getInstance()->map(
            json_decode($responseText),
            Jsonable::instantiate(Response::class, [$resultClass])
        );

        return $response;
    }

    protected static function renderFormDataContent($args, $multipart_boundary) {
        $content = "";

        foreach ($args as $name => $value) {
            if ($value == null) {
                continue;
            }

            $content .= "--" . $multipart_boundary . "\r\n" .
                "Content-Disposition: form-data; name=\"" . $name . "\"\r\n" .
                "\r\n" . $value . "\r\n";
        }

        $content .= "--" . $multipart_boundary . "--\r\n";

        return $content;
    }

}