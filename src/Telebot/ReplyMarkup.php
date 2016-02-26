<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/26/2016
 * Time: 7:12 AM
 */

namespace Telebot;


class ReplyMarkup {

    public static function ReplyKeyboardMarkup(ReplyKeyboardMarkup $replyKeyboardMarkup) {
        return self::encode($replyKeyboardMarkup);
    }

    public static function ReplyKeyboardHide(ReplyKeyboardHide $replyKeyboardHide) {
        return self::encode($replyKeyboardHide);
    }

    public static function ForceReply(ForceReply $forceReply) {
        return self::encode($forceReply);
    }

    protected static function encode($object) {
        $filteredObject = array_filter((array)$object);

        return json_encode($filteredObject);
    }

}