<?php

define("DEBUG", 1);

//Корень сайта
define("ROOT", dirname(__DIR__));

//Публичная папка
define("WWW", ROOT . '/public');

//Папка с контроллерами, видами, моделями
define("APP", ROOT . '/app');

//Ядро приложения
define("CORE", ROOT . '/vendor/ishop/core');

//Библиотеки
define("LIBS", ROOT . '/vendor/ishop/core/libs');

//Папка кеша
define("CACHE", ROOT . '/tmp/cache');

//Конфигурационные файлы
define("CONF", ROOT . '/config');

//Шаблон сайта по умолчанию
define("LAYOUT", 'watches');

$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

$app_path = preg_replace("#[^/]+$#", '', $app_path);

$app_path = str_replace('public/', '', $app_path);

//URL сайта
define("PATH", $app_path);

//URL админки
define("ADMIN", PATH . '/admin');

//Пусть к авторзагрузчику
require_once ROOT . '/vendor/autoload.php';