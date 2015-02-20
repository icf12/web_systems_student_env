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
    if (!method_exists($callback['Controller'], $callback['Method'])) {
      new Exception("Method $callback not exists"); 
    }
    $this->routes[$type][$pattern] = $callback;
  }

  public function process($method, $uri) {
      if (in_array($method, array('GET', 'POST'))) {
        new Exception("Request method should be GET or POST");
      }
      $active_routes = $this->routes[$method];

      foreach ($active_routes as $pattern => $callback) {
      if (preg_match_all("/$pattern/", $uri, $matches) !== 0) {
// вызываем callback
                $posable_attribute = array();
                foreach(array_slice($matches,1) as $value){
                    $posable_attribute[] = array_pop($value);
                }
                $e = new $callback['Controller']();
                return call_user_func_array(array($e, $callback['Method']), $posable_attribute);
// выходим из цикла
                break;
            }
            $matches = array();
        }
        return "";
  }
}