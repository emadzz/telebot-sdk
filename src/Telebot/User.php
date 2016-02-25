<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 2:02 PM
 */

namespace Telebot;


class User {

    /**
     * @required
     * @var integer
     */
    public $id;

    /**
     * @required
     * @var string
     */
    protected $first_name;

    /**
     * @var string
     */
    protected $last_name;

    /**
     * @var string
     */
    protected $username;

}