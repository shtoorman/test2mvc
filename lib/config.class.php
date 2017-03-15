<?php

//Отвечает за хранение настроек приложения

class Config
{
    //array in settings
    protected static $settings = array();


    /**
     * @param $key
     * @return mixed|null
     */
    public static function get($key)
    {
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;

    }

    /**
     * @param $key
     * @param $value
     */
    public static function set($key, $value)
    {
        self::$settings[$key] = $value;

    }


}


