<?php

require_once '../../vendor/autoload.php';

//create router instance
$router = new \Bramus\Router\Router();
$router->setNamespace('Http');

$router->get('/', function() {echo 'home';});

//company overview
$router->get('/companies', 'CompaniesController@overview');

//company search 
$router->get('/companies/search/(\w+)', 'CompaniesController@search');

$router->post('/companies/search', function() {
    $term = (isset($_POST['term'])? $_POST['term'] : '');
    header('Location: search/' . urlencode($term));
    exit();
});
// //company create 
// $router->get('/companies/create');
// $router->post('/companies/create');

//company login 
$router->get('/login', 'BaseController@login');

$router->post('/login', 'BaseController@login');

// //company register 
// $router->get('/register');
// $router->post('/register');

$router->set404(function () {
    http_response_code(404);
    echo 'Looks like this page got lost in my bad coding practises ;).';
    // Better: load your 404 HTML template here
});

// $router->get('/companies/search', function() {
//     echo '<form method="post"><input type="text" name="term"><input type="submit"></form>';
//     // Better: load your W3C-valid HTML template here
// });

//run it
$router->run();
