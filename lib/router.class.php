<?php

//Диспечер запросов

class Router
{

    protected $uri;

    protected $controller;

    protected $action;

    protected $params;

    /**
     * @return mixed
     */
    public function getUri()
    {

        return $this->uri;
    }

    /**
     * @return mixed
     */
    public function getController()
    {

        return $this->controller;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {

        return $this->action;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {

        return $this->params;
    }

    /**
     * Router constructor.
     * @param $uri
     */
    public function __construct($uri)
    {

        print_r('Ok! Router was called with uri: ' . $uri);
    }

}


?>