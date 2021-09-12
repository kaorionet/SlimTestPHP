<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\NotFoundException;
use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';

$aux = new \DI\Container();
AppFactory::setContainer($aux);

$app = AppFactory::create();

$container = $app->getContainer();
require __DIR__ . '/routes.php';
require __DIR__ . '/db.php';
require __DIR__ . '/dependencies.php';
$app->run();