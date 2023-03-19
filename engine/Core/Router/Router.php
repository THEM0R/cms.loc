<?php

namespace Engine\Core\Router;

class Router
{
  /**
   * @var array
   */
  private $routes = [];

  /**
   * @var
   */
  private $host;

  /**
   * @param $host
   */
  public function __construct($host)
  {
    $this->host = $host;
  }

  /**
   * @param $key
   * @param $pattern
   * @param $controller
   * @param $method
   * @return void
   */
  public function add($key, $pattern, $controller, $method = 'Get')
  {
    $this->routes[$key] = [
      'pattern' => $pattern,
      'controller' => $controller,
      'method' => $method
    ];
  }

}