<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/26/17
 * Time: 10:34 AM
 */
class Singleton {
    public static function getInstance() {//globally accessed instance
        static $instance = null;

        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }
    protected function __construct() {
    }

    private function __clone() {
    }

    private function __wakeup() {
    }
}
