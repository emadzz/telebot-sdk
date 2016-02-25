<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 2:04 PM
 */

namespace Telebot;


class Chat {

    /**
     * @required
     * @var integer
     */
    public $id;

    /**
     * @required
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $first_name;

    /**
     * @var string
     */
    public $last_name;

}