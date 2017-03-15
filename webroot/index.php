<?php
//Константа Директори сепарейтор
define('DS', DIRECTORY_SEPARATOR);
//echo 'Directory sep->' . DS;
//Рут константа указывает адресс к домену
//__FILE__ == D:\WAMP\OpenServer\domains\test2mvc\webroot\index.php/
//dirname(__FILE__) == D:\WAMP\OpenServer\domains\test2mvc\webroot/
//define('ROOT', dirname(dirname(__FILE__))) == D:\WAMP\OpenServer\domains\test2mvc/
define('ROOT', dirname(dirname(__FILE__)));
//
define('VIEWS_PATH', ROOT . DS . 'views');
require_once(ROOT . DS . 'lib' . DS . 'init.php');

//$router = new Router($_SERVER['REQUEST_URI']);

//echo "<pre>";
////PHP_EOL константк перевода строки
//print_r('Route: '.$router->getRoute().PHP_EOL);
//print_r('Language: '.$router->getLanguage().PHP_EOL);
//print_r('Controller: '.$router->getController().PHP_EOL);
//print_r('Action to be called: '.$router->getMethodPrefix().$router->getAction().PHP_EOL);
//echo "Params: ";
//print_r($router->getParams());

//try {
//    App::run($_SERVER['REQUEST_URI']);
//    }
//catch (Exception $e) {
//    print_r($e);
//}
App::run($_SERVER['REQUEST_URI']);
//echo 'Root->'.ROOT;
//Строка запроса что пришла в индекс
//$uri = $_SERVER['REQUEST_URI'];
print_r($uri);
