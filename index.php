<?php

require_once __DIR__.'/autoload/autoload.php';

$ctrl = isset( $_GET['ctrl'] ) ? $_GET['ctrl'] : 'home';
$act  = isset( $_GET['act'] ) ? $_GET['act'] : 'Index';

$controllerClassName = $ctrl.'Controller';
require_once __DIR__.'/controllers/'.$controllerClassName.'.php';

$controller = new $controllerClassName;

$method = 'action'.$act;
$controller->$method();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once __DIR__.'/autoload/autoload.php';

    $ctrl = isset( $_POST['ctrl'] ) ? $_POST['ctrl'] : 'home';
    $act  = isset( $_POST['act'] ) ? $_POST['act'] : 'Index';

    $controllerClassName = $ctrl.'Controller';
    require_once __DIR__.'/controllers/'.$controllerClassName.'.php';

    $controller = new $controllerClassName;

    $method = 'action'.$act;
    $controller->$method();
}