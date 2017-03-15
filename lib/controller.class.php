<?php

class Controller
{
    //информация из контроллера в представление
    protected $data;
    //для доступа к обьектам модели
    protected $module;
    //параметры со строки запроса
    protected $params;


    /**
     * Controller constructor.
     * @param array $data
     */
    public function __construct($data = array())
    {
        $this->data = $data;;
        $this->params = App::getRouter()->getParams();//параметры запроса из обьекта роутера
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }



}