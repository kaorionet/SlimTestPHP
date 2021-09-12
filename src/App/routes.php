<?php
use Slim\Routing\RouteCollectorProxy;

$app->group('/api/v1', function(RouteCollectorProxy $proxy){
    $proxy->get('/usuarios', 'App\Controller\UsuariosController:getUsuarios');

});