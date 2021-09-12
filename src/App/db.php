<?php

$container->set('db_settings', function (){
    return (object)[
        "host" => 'localhost',
        "port" => '3306',
        "database" => 'apitestslim',
        "user" => 'root',
        "password" => '12345'
    ];
});
