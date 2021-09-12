<?php
namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controller\BaseController;

class UsuariosController extends BaseController{

    public function getUsuarios($request, $response, $args){

        $dba = $this->container->get('db');
        //$result = $dba->query("SELECT * FROM Usuarios;");
        var_dump($dba);
        $json = json_encode($dba);
        $response->getBody()->write($dba);
        return $response;
    }
}