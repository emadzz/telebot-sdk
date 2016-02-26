<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 2:02 PM
 */

namespace TelebotSDK;


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
    public $first_name;

    /**
     * @var string
     */
    public $last_name;

    /**
     * @var string
     */
    public $username;

}