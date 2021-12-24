<?php

require_once '../../vendor/autoload.php';

//create router instance
$router = new \Bramus\Router\Router();
$router->setNamespace('Http');

$router->get('/', function() {echo 'home';});

//company overview
$router->get('/companies', 'CompaniesController@overview');
// $router->get('/companies/search/(\w+)', 'CompaniesController@addToUrl');
// $router->post('/companies/search/(\w+)', 'CompaniesController@search');
$router->get('/companies/form/', 'CompaniesController@formPage');
// $router->post('/search', function() {
//     $term = (isset($_POST['term'])? $_POST['term'] : '');
//     header('Location: /search/' . urlencode($term));
//     exit();
// });
// $router->get('/search/(\w+)', 'CompaniesController@show');



// $router->get('/search/(\w+)', 'CompaniesController@search');
$router->get('/search', 'CompaniesController@show');

$router->post('/search', function() {
    $term = (isset($_POST['term'])? $_POST['term'] : '');
    header('Location: search/' . urlencode($term));
    exit();
});

$router->get('/search/(\w+)', 'CompaniesController@showResults');




// //company create 
// $router->get('/companies/create');
// $router->post('/companies/create');

//company login 
$router->get('/login', 'BaseController@login');

$router->post('/login', 'BaseController@login');

// //company register 
// $router->get('/register');
// $router->post('/register');


$router->mount('/api', function() use ($router){
    $router->get('/tasks', 'TaskController@overview');
    $router->post('/tasks', 'TaskController@create');
    $router->delete('/tasks/(\d+)', 'TaskController@delete');
    $router->put('/tasks/(\d+)', 'TaskController@update');
});

$router->set404(function () {
    http_response_code(404);
    echo 'Looks like this page got lost in my bad coding practises ;).';
    // Better: load your 404 HTML template here
});

//run it
$router->run();
