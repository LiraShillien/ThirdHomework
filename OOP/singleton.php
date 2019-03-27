<?php

class Singleton
{
    private static $instance = null;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new static;
        }
        return self::$instance;
    }
}


