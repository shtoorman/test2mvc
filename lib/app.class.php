<?php

/**
 * Class App
 */
//Отвечает за обработку запросов и вызывает методы контроллера
class App
{

    /**
     * @var
     */
    protected static $router;//Для работы с обьектом роутера

    /**
     * @return mixed
     */
    public static function getRouter() //получение обьекта роутер
    {
        return self::$router;
    }

    /**
     * @param $uri
     * @throws Exception
     */
    public static function run($uri) // обработка запросов к приложению
    {
        self::$router = new Router($uri);
        //ucfirst - Сделать первый верхний регистр символ строки
        //Получаем название класса контроллера
        $controller_class = ucfirst(self::$router->getController()) . 'Controller';
        //метод контроллера
        $controller_method = strtolower(self::$router->getMethodPrefix() . self::$router->getAction());

        //Calling`s controllers method;
        $controller_object = new $controller_class();
        if (method_exists($controller_object, $controller_method)) {
            //Controller`s action may return view path
            $view_path = $controller_object->$controller_method();
            $view_object = new View($controller_object->getData(), $view_path);
            $content = $view_object->render();
        } else {
            throw new Exception('Method ' . $controller_method . ' of class ' . $controller_class . ' does not exist. ');
        }
        $layout = self::$router->getRoute();//название роута
        echo 'Layout ->';
        print_r($layout);
        echo '<br/>';
        $layout_path = VIEWS_PATH.DS.$layout.'.html';//путь к основному шаблону
        echo 'Layout Path ->';
        print_r($layout_path);
        echo '<br/>';
        $layout_view_object = new View(compact('content'), $layout_path);
        echo 'Layout object ->';
        print_r($layout_view_object);
        echo '<br/>';
        echo $layout_view_object->render();

    }
}