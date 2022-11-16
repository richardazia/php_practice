<?php

class Router {
  protected $routes = [];

  public function add($route, $params = [])
  {
    // convert to regex
    $route = preg_replace('/\//', '\\/', $route);
    // convert variables e.g. {controller}
    $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);
    // convert variables with custom regex eg {id:\d+}
    $route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route);
    // add start and end delimiters and case insensitivity
    $route = '/^' . $route . '$/i';
    
    
    $this->routes[$route] = $params;
  }

  public function getRoutes()
  {
    return $this->routes;
  }

  public function match($url)
  {
    foreach ( $this->routes as $route => $params) {
      if (preg_match($route, $url, $matches)) {

        foreach ($matches as $key => $match) {
          if (is_string($key)) {
            $params[$key] = $match;
          }
        }
        $this->params = $params;
        return true;
      }
    }

      return false;
  }

  public function getParams()
  {
    return $this->params;
  }
}

?>
