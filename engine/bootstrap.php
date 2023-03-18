<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Engine\Cms;
use Engine\DI\DI;

  // Error Exception
  // Конструкція для роботи з винятками
try { // try Тут виконується код
  // записуємо клас в $di
  $di = new DI();
  // передаємо в конструктор CMS клас DI
  $cms = new Cms($di);
  //cms Запуск
  $cms->run();

} catch (\ErrorException $e) { // помилка - записується в перемінну $e
  // якшо виявляється помилка попадаємо в catch і виводимо її повідомленні
  echo $e->getMessage(); // обєкт $e виводимо де помилка
}