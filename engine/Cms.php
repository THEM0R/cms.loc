<?php

namespace Engine;

class Cms
{
  /**
   * @var DI
   */
  private $di;

  /**
   * @param $di
   */
  public function __construct($di)
  {
    $this->di = $di;
  }

  /**
   * Run CMS
   * @return void
   */
  public function run(){

  }
}