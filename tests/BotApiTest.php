<?php
use Telebot\BotApi;
use Telebot\Response;
use Telebot\User;

/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 9:14 PM
 */
class BotApiTest extends PHPUnit_Framework_TestCase {

    /**
     * @var BotApi
     */
    protected $bot = null;

    protected function setUp() {
        $this->bot = new BotApi('181790135:AAGd71Jarknk5yyQ5I9AarzL84VnIIvB41g');
    }

    public function testGetMe() {
        $botInfo = $this->bot->getMe();

        // Check if a correct response is returned
        $this->assertInstanceOf(Response::class, $botInfo);

        // Check if response is ok
        $this->assertTrue($botInfo->ok);

        // Check if result is `User`
        $this->assertInstanceOf(User::class, $botInfo->getResult());
    }

    protected function tearDown() {
        unset($this->bot);
    }

}