<?php

require_once '../../vendor/autoload.php';

//create router instance
$router = new \Bramus\Router\Router();
$router->setNamespace('Http');

$router->get('/', function() {echo 'home';});

//company overview
$router->get('/companies', 'CompaniesController@overview');

//company search 
$router->get('/companies/search', 'CompaniesController@search');

// //company create 
// $router->get('/companies/create');
// $router->post('/companies/create');

// //company login 
// $router->get('/login');
// $router->post('/login');

// //company register 
// $router->get('/register');
// $router->post('/register');

//run it
$router->run();
