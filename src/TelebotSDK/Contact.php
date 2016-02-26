<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 2:06 PM
 */

namespace TelebotSDK;


class Contact {

    /**
     * @required
     * @var string
     */
    public $phone_number;

    /**
     * @required
     * @var string
     */
    public $first_name;

    /**
     * @var string
     */
    public $list_name;

    /**
     * @var integer
     */
    public $user_id;

}