<?php

ob_start();
session_start();
//router recebe parâmetro e dispara uma rota que comunica com controlador e
//com método
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(site());
$router->namespace("source\Controllers");

/**
 * SITE
 */

 $router->group(null);
 $router->get("/","Web:login","web.login");
 $router->get("/cadastrar","Web:register","web.register");
 $router->get("/recuperar","Web:forget","web.forget");
 $router->get("/senha/{email}/{forget}","Web:reset","web.reset");


/**
 * AUTH
 */

/**
 * AUTH SOCIAL
 */

/**
 * PROFILE
 */

 /**
 * ERRORS
 */
$router->group("ops");
$router->get("/{errcode}","Web:error","web.error");
/**
 * ROUTE PROCESS
 */
$router->dispatch();
/* *
 * ERRORs PROCESS
 */
if($router->error()){
    $router->redirect("web.error",["errcode" => $router->error()]);
}
ob_end_flush();