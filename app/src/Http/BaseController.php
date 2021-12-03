<?php

namespace Http;

use Services\DatabaseConnector;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class BaseController
{
    private $databaseConnection;
    private $twigEngine;
    public function __construct()
    {
        $this->databaseConnection = \Services\DatabaseConnector::getConnection();
        $loader = new FilesystemLoader(__DIR__ . '/../../resources/templates/alela/');
        $this->twigEngine = new Environment($loader, [
            'cache' => __DIR__ . '/../../storage/cache',
            'auto_reload' => true //set to false on production
        ]);
    }
    public function login()
    {
        
        echo $this->twigEngine->render('login.twig');
    }
   
}
