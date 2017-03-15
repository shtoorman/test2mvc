<?php

/**
 * Class View
 */
//отвечающий за работу представления
class View
{

    /**
     * @var array
     */

    protected $data;    //хранение даннях от контроллера

    /**
     * @var null
     */
    protected $path; //путь к текущему файлу представления




    protected static function getDefaultViewPath()
    {
        $router = App::getRouter();
        if (!$router) {
            return false;
        }
        $controller_dir = $router->getController();//название контроллера
        //Название html будет как название контроллера и начинаться с префикса метода
        $template_name = $router->getMethodPrefix() . $router->getAction() . '.html';//

        return VIEWS_PATH . DS . $controller_dir . DS . $template_name;
    }


    /**
     * View constructor.
     * @param array $data
     * @param null $path
     * @throws Exception
     */
    //инициализация обьекта
    public function __construct($data = array(), $path = null)
    {
        if (!$path) {// не заданна или пустая
            $path = self::getDefaultViewPath();
        }
        if (!file_exists($path)) {
            throw new Exception('Template file is not found in path : ' . $path);
        }
        $this->path = $path;
        $this->data = $data;

    }

    /**
     * @return string
     */
    public function render()
    {
        $data = $this->data;

        ob_start();//буферизация вывода
        if (!empty($this->path)) {
            include($this->path);
        }
        $content = ob_get_clean();

        return $content;

    }

}