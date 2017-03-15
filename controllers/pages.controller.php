<?php

/**
 * Class PagesController
 */
// контроллер по умолчанию для отображения простых страгиц сайта

class PagesController extends Controller
{

    public function index()//Выводит список страниц
    {
        $this->data['test_content'] = "Here will be a pages list";
    }

    /**
     *
     */
    public function view()//
    {
        $params = App::getRouter()->getParams();//флиас требуемой страгтцы

        if (isset($params[0])) {
            $alias = strtolower($params[0]);
            $this->data['content'] = "Here will be a page '{$alias}' alias";
        }
    }
}