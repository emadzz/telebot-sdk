<?php

use Telebot\Hi;

/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 3:05 PM
 */
class HiTest extends PHPUnit_Framework_TestCase {

    public function testRun() {
        $this->assertEquals("Hello World!", Hi::run());
    }

}