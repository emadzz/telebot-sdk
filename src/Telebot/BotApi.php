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

    protected $api_url = "https://api.telegram.org/bot{{token}}";

    public function __construct($token) {
        $this->api_url = str_replace('{{token}}', $token, $this->api_url);
    }

    /**
     * @return Response
     * @throws \JsonMapper_Exception
     */
    public function getMe() {
        $response = $this->performMethod('getMe');

        $botInfo = JsonMapper::getInstance()->map(
            json_decode($response), Jsonable::instantiate(Response::class, [User::class])
        );

        return $botInfo;
    }

    protected function performMethod($method, $args = []) {
        $end_point = $this->api_url . '/' . $method;

        // Setting a custom stream context,
        $context = stream_context_create([
            'http' => [
                // To ignore http errors and return the response result anyway
                'ignore_errors' => true,
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => http_build_query($args),
            ],
        ]);

        // Call telegram api, and return the response
        $response = file_get_contents($end_point, false, $context);

        return $response;
    }

}