<?php

namespace source\Controllers;

Class Web extends controller
{
    public function __construct($router)
    {
        parent::__construct($router);

        if(!empty($_SESSION["user"])){
        $this->router->redirect("app.home");
        }
    }

    public function login(): void
    {
        echo "<h1> Olá mundo!</h1>";
    }
}