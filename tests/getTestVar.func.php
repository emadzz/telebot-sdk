<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 10:54 PM
 */

function getTestVar($key) {
    $vars = [
        'botToken' => '--bot_token--',
        'chatId' => '--chat_id--',
    ];

    return $vars[ $key ];
}