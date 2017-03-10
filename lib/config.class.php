<?php
//Отвечает за хранение настроек приложения

class Config{
	//array in settings
	protected static $settings = array();
	
	//если существует возвращает значение настроек. 
	public static function get($key){
		return isset(self::$settings[$key]) ? self::$settings[$key] : null;
		
	}
	
	 public static function set($key, $value){
		self::$settings[$key] = $value;
	
	}
}








?>