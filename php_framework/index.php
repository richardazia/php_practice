<?php

require 'Router.php';

$router = new Router();

// echo get_class($router);

// The routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
// $router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);
$router->add('{controller}/{action}');
$router->add('admin/{action}/{controller}');
$router->add('{controller}/{id:\d+}/{action}');
// echo '<pre>';
// var_dump($router->getRoutes());
// echo '</pre>';

$url = $_SERVER['QUERY_STRING'];

if ($router->match($url)) {
  echo '<pre>';
  // var_dump($router->getParams());
  echo htmlspecialchars(print_r($router->getRoutes(), true));
  echo '</pre>';
} else {
  echo "No route found for URL '$url'";
}

?>
