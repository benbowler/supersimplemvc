<?php // index

require_once('application/config.php');
require_once('application/model.php');
require_once('application/controller.php');

ini_set('display_errors', 0);

// routes
$segments = @explode('/', $_SERVER['PATH_INFO']);
$route = ($segments[1]) ? $route = ($segments[1]) : 'index' ;
unset($segments[1]);

$controller = new controller();
$controller->$route($segments);