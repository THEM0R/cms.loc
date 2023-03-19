<?php

namespace Engine\Service;

use Engine\DI\DI;

abstract class AbstractProvider
{
  /**
   * @var \Engine\DI\DI;
   */
  protected $di;

  /**
   * AbstractProvider constructor
   * @param DI $di
   */
  public function __construct(\Engine\DI\DI $di)
  {
    $this->di = $di;
  }

  /**
   * @return mixed
   * Ініцілізація нового сервісу
   */
  abstract function init();

}