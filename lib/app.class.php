<?php

class App
{

    protected static $router;

    /**
     * @return mixed
     */
    public static function getRouter()
    {
        return self::$router;
    }

    public static function run($uri)
    {
        self::$router = new Router($uri);
        //ucfirst - Сделать первый верхний регистр символ строки
        //Получаем название класса контроллера
        $controller_class = ucfirst(self::$router->getController()).'Controller';
        //метод контроллера
        $controller_method = strtolower(self::$router->getMethodPrefix().self::$router->getAction());

        //Calling`s controllers method;
        $controller_object = new $controller_class();
        if (method_exists($controller_object, $controller_method)){
            $result = $controller_object->$controller_method();
        }




    }
}