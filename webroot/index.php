<?php
//Константа Директори сепарейтор
define('DS', DIRECTORY_SEPARATOR);
//echo 'Directory sep->' . DS;
//Рут константа указывает адресс к домену
//__FILE__ == D:\WAMP\OpenServer\domains\test2mvc\webroot\index.php/
//dirname(__FILE__) == D:\WAMP\OpenServer\domains\test2mvc\webroot/
//define('ROOT', dirname(dirname(__FILE__))) == D:\WAMP\OpenServer\domains\test2mvc/
define('ROOT', dirname(dirname(__FILE__)));

require_once (ROOT.DS.'lib'.DS.'init.php');

$router = new Router($_SERVER['REQUEST_URI']);


//echo 'Root->'.ROOT;
//Строка запроса что пришла в индекс
//$uri = $_SERVER['REQUEST_URI'];
//print_r($uri);
