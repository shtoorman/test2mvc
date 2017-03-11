<?php
//Автозагрузчик классов

require_once(ROOT . DS . 'config' . DS . 'config.php');

/**
 * @param $class_name
 * @throws Exception
 */
function __autoload($class_name)
{
    /** @var TYPE_NAME $lib_path */
    $lib_path = ROOT . DS . 'lib' . DS . strtolower($class_name) . '.class.php';
    /** @var TYPE_NAME $controllers_path */
    $controllers_path = ROOT . DS . 'controllers' . DS . str_replace('controller', '', strtolower($class_name)) . '.controller.php';
    /** @var TYPE_NAME $model_path */
    $model_path = ROOT . DS . 'models' . DS . strtolower($class_name) . '.php';

    if (file_exists($lib_path)) {
        require_once($lib_path);
    } elseif (file_exists($controllers_path)) {
        require_once($controllers_path);
    } elseif (file_exists($model_path)) {
        require_once($model_path);
    } else {
        throw new Exception('Failed to include class: ' . $class_name);
    }


}


