<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/26/2016
 * Time: 7:12 AM
 */

namespace TelebotSDK;


class ReplyMarkup {

    public static function encode($object) {
        $filteredObject = array_filter((array)$object);

        return json_encode($filteredObject);
    }

}