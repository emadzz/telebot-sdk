<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/25/2016
 * Time: 3:25 PM
 */

namespace TelebotSDK;


use TelebotSDK\JsonMapper\JsonMapper;

trait Jsonable {

    /**
     * Parses/maps the text json to the current class
     *
     * @param string $jsonText JSON data that represents the current class
     *
     * @return object A new object of the current class
     * @throws Telebot_InvalidJsonException When a required property is missing or unexpected data
     *     provided
     */
    public static function parse($jsonText) {
        // Create a mapper instance
        $mapper = JsonMapper::getInstance();

        // To throw an exception if there's a missing required property
        $mapper->bExceptionOnMissingData = true;

        try {
            // Map the parsed json to an object of the current class
            $obj = $mapper->map(
            // Parse JSON text to an object
                json_decode($jsonText),
                // Create a new object of the current class
                self::instantiate(__CLASS__)
            );
        } catch (\JsonMapper_Exception $e) {
            // This is usually caused when a missing required property is detected
            throw new Telebot_InvalidJsonException(
                "Invalid telegram update json data: " . $e->getMessage(), 0, $e
            );
        }

        return $obj;
    }

    /**
     * Creates a new instance of the provided class
     *
     * @param string $class A fully qualified name of the class to be created
     * @param array $args Arguments to be passed to the class constructor
     *
     * @return mixed Object of the created class
     */
    public static function instantiate($class, $args = []) {
        // Prepare a reflection class with the passed `$class`
        $reflection_class = new \ReflectionClass($class);

        // Create a new instance with arguments provided by `$args`
        return $reflection_class->newInstanceArgs($args);
    }

}