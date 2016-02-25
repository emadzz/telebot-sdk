<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 2:06 PM
 */

namespace Telebot;


class Contact {

    /**
     * @required
     * @var string
     */
    protected $phone_number;

    /**
     * @required
     * @var string
     */
    protected $first_name;

    /**
     * @var string
     */
    protected $list_name;

    /**
     * @var integer
     */
    protected $user_id;

}