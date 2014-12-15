<?php

class Router {
    private $routes = null;
    private static $_instance = null;
    private function __construct()
    {
        $this->routes = array();
    }

  public static function Instance() {
    if (is_null(self::$_instance)) {
      self::$_instance = new Router();
    }
    return self::$_instance;
  } 

  public function get($pattern, $callback) {
    $this->set('GET', $pattern, $callback);
  }

  public function post($pattern, $callback) {
    $this->set('POST', $pattern, $callback);
  }

  private function set($type, $pattern, $callback) {
    if (!function_exists($callback)) { 
      new Exception("Method $callback not exists"); 
    }
    $this->routes[$type][$pattern] = $callback;
  }

  public function process($method, $uri) {
    if (in_array($method, array('GET', 'POST'))) {
      new Exception("Request method should be GET or POST"); 
    }

    // Выполнение роутинга
    // Используем роуты $routes['GET'] или $routes['POST']  в зависимости от метода HTTP.
    $active_routes = $this->routes[$method];

    // Для всех роутов 
    foreach ($active_routes as $pattern => $callback) {
      if (preg_match_all("/$pattern/", $uri, $matches) !== 0){
        // вызываем callback
        $callback();
        // выходим из цикла
        break;
      }
      $matches = array();
    }
  }
}