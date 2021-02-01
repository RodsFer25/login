<?php
/*
    SITE CONFIG
*/
define("SITE",[
    "name" => "Auth em MVC com PHP",
    "desc" => "Aprenda a construir uma aplicação...",
    "domain" => "localauthes.com",
    "locale" => "pt_BR",
    "root" => "http://localhost/login"
]);
/*
    SITE MINIFY
*/
    if($_SERVER["SERVER_NAME"] == "localhost"){
        require __DIR__ . "/Minify.php";
    }

/*
    DATABASE DATALAYER
*/
    define("DATA_LAYER_CONFIG", [
        "driver" => "mysql",
        "host" => "localhost",
        "port" => "3306",
        "dbname" => "teste_login",
        "username" => "root",
        "passwd" => "",
        "options" => [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_CASE => PDO::CASE_NATURAL
        ]
    ]);

    /*
    SOCIAL CONFIG
    */
    define("SOCIAL", [
    "facebook_page" => "TheKnightClash",
    "facebook_author" => "rodolfofernandes25",
    "facebook_appId" => "",
    "twitter_creator" => "@rft2507",
    "twitter_site" => "@rft2507"
    ]);

    /*
    *   MAIL CONNECT
    */

    define("MAIL", []);

    /*
    *   SOCIAL LOGIN: FACEBOOK_LOGIN
    */

    define("FACEBOOK_LOGIN", []);

    /*
    *   SOCIAL LOGIN: GOOGLE_LOGIN
    */

    define("GOOGLE_LOGIN", []);
