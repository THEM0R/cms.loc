<?php

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../engine/dump.php";

use Engine\Cms;
use Engine\DI\DI;

  // Error Exception
  // Конструкція для роботи з винятками
try { // try Тут виконується код
  // записуємо клас в $di
  $di = new DI();
  // test
  //$di->set('test',['db' => 'db_object']);
  //$di->set('test2',['mail' => 'mail_object']);

  // підключення сервісів
  $services = require __DIR__ . '/Config/Service.php';
  // ініцілізація сервісів
  foreach ($services as $service){
    $provider = new $service($di);
    $provider->init();
  }

  // передаємо в конструктор CMS клас DI
  $cms = new Cms($di);
  //cms Запуск
  $cms->run();

} catch (\ErrorException $e) { // помилка - записується в перемінну $e
  // якшо виявляється помилка попадаємо в catch і виводимо її повідомленні
  echo $e->getMessage(); // обєкт $e виводимо де помилка
}