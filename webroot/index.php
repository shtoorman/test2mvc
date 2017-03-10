<?php
//Константа Директори сепарейтор 
define ('DS', DIRECTORY_SEPARATOR);
//Рут константа указывать на 2 уровня выше чем индекс рнр
define ('ROOT',dirname(dirname(__FILE__)));//для включения файлов
//Строка запроса что пришла в индекс
$uri = $_SERVER['$REQUEST_URL'];
print_r($uri);
?>