<?php

namespace Engine\Service\Router;

class UrlDispatcher
{
  /**
   * @var string[]
   */
  private $method = [
    'GET',
    'POST'
  ];

  /**
   * @var array[]
   */
  private $routes = [
    'GET' => [],
    'POST' => []
  ];

  /**
   * @var string[]
   */
  private $patterns = [
    'int' => '[0-9]+',
    'str' => '[a-zA-z\.\-_%]+',
    'any' => '[a-zA-z0-9\.\-_%]+'
  ];

  /**
   * @param $key
   * @param $pattern
   * @return void
   */
  public function addPattern($key, $pattern){
    $this->patterns[$key] = $pattern;
  }

  public function dispatch($method, $uri){
    $routes = $this->routes(strtoupper($method));

    if(array_key_exists($uri, $routes)){

    }

  }
}