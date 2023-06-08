<?php

function AutoLoader(string $className){
    require_once $_SERVER["DOCUMENT_ROOT"] .'/LR_CRUDS/'.str_replace('\\', '/', $className) . '.php';
}
spl_autoload_register('AutoLoader');

$routes = require $_SERVER["DOCUMENT_ROOT"] .'/LR_CRUDS/routes.php';
$route = $_GET['route'] ?? '';
$routeFound = false;
foreach ($routes as $pattern => $controllerAndAction) {
    preg_match($pattern, $route, $matches);
    if (!empty($matches)) {
        $routeFound = true;
        break;
    }
}
unset($matches[0]);
$controllerName = $controllerAndAction[0]; // имя контроллера и метода из routes.php
$actionName = $controllerAndAction[1];
$controller = new $controllerName();
$controller->$actionName(...$matches);