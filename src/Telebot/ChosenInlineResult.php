<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 10:26 PM
 */

namespace Telebot;


class ChosenInlineResult {

    /**
     * @required
     * @var string
     */
    public $result_id;

    /**
     * @required
     * @var User
     */
    public $from;

    /**
     * @required
     * @var string
     */
    public $query;

}