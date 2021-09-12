<?php
use PDO\Exception;
use Psr\Container\ContainerInterface;

$container->set('db', function(ContainerInterface $c){
    
    try{
        $config = $c->get('db_settings');
        $host = $config->host;
        $password = $config->password;
        $user = $config->user;
        $database = $config->database;
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        ];

        $dsn = "mysql:host=".$host.";dbname=".$database.";charset=utf8;";
        // return $config;
        return new PDO($dsn, $user, $password, $opt);

    }
    catch (PDOException $e){
        return $e->getMessage();        
    }

});