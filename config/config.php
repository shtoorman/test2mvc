<?php
//Осовой конфигурационный файл приложения
//Параметры азвания сайта или подключения к базе данных
Config::set('site_name', 'Your Site Name');
//Определения списка языков
Config::set('languages', array('ru', 'en'));

//Routes, Route name => method prefix
//2 роута,дкфолт и админ
Config::set('routes', array(
    'default' => '',
    'admin' => 'admin_',
));
//если роут не зада явно будет использован дифолт
Config::set('default_route', 'default');
//язык по умолчанию ru.если не указан в url явно
Config::set('default_language', 'ru');
//контроллер по умолчанию pages
Config::set('default_controller', 'pages');

Config::set('default_action', 'index');

