<?php

namespace Engine;

class Cms
{
  /**
   * @var DI
   */
  private $di;

  public $router;

  /**
   * @param $di
   */
  public function __construct($di)
  {
    $this->di = $di;
    $this->router = $this->di->get('router');
  }

  /**
   * Run CMS
   * @return void
   */
  public function run(){

    //$db = $this->di->get('test2');

    //pr($this->di);

    $this->router->add('home', '/', 'HomeController:index');
    $this->router->add('product', '/product/{id}', 'ProductController:index');

    pr($this->di);

  }
}