<?php
session_start();
/**
 * Lab 07 — Start from this version
 * Tasklist v2
 * @author Sander Spaas
 */

require_once('../../vendor/autoload.php');
require_once('../../config/database.php');
require_once('../../src/Services/DatabaseConnector.php');

// @TODO Fetch database connection
$connection = \Services\DatabaseConnector::getConnection();
// @TODO Bootstrap Twig 
$loader = new \Twig\Loader\FileSystemLoader(__DIR__ . '/../../resources/templates');
$twig = new Twig\Environment($loader, [
    'cache' => __DIR__ . '/../../storage/cache',
    'auto_reload' => true
]);
// Initial Values
$formErrors = []; // The encountered form errors

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Handle action 'add' (user pressed add button)
if (isset($_POST['moduleAction']) && ($_POST['moduleAction'] === 'login')) {
    if (trim($username) !== '' && trim($password) !== '') {
            $statement = $connection->prepare('SELECT username, password FROM Users WHERE username =? AND  password =?');
            $result = $statement->executeStatement([$username, $password]);
            // $tasks = $query->fetchAssociative();
            //check if username and password is actually correct
            echo $result;
            echo $result2;
            echo $username;
            echo $password;
            
            // if ($result == $username && password_verify($_POST['password'], $result2)) {
                $_SESSION["logged_in"] = true;
                $_SESSION["username"] = $username;
                // @TODO if login succesfull redirect to index
                header('Location: index.php');
                exit();
            // }else{
                array_push($formErrors, 'Gebruikersnaam of paswoord is incorrect.');
            // }
    }else{
        array_push($formErrors, 'Gebruikersnaam of paswoord is incorrect.');
    }
}

// No action to handle: show our page itself

$variables = [
    'errors' => $formErrors,
    'login' => $name = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : 'unset',
];


// render template
$template = $twig->load('login.twig');
echo $template->render($variables);
