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
if (isset($_POST['moduleAction']) && ($_POST['moduleAction'] === 'register')) {
    //checking if an account under that name already exists 
    $tasksfetch = $connection->executeQuery('SELECT username FROM users WHERE username=?', array($username));
    $tasks = $tasksfetch->fetchAllAssociative();
    if (count($tasks) > 0) {
        array_push($formErrors, 'Gebruikersnaam is al in gebruik.');
    } else {
        //user aan database gaan toevoegen
        $statement = $connection->prepare('INSERT INTO users (username, password) VALUES (?,?)');
        $result = $statement->executeStatement([$username, password_hash($password, PASSWORD_DEFAULT)]);
        //met de username een query gaan uitvoeren die ons het id gaat geven
        $userfetch = $connection->executeQuery('SELECT id FROM users WHERE username = ? ', array($username));
        $id = $userfetch->fetchAssociative();
        $_SESSION["logged_in"] = true;
        $_SESSION["user_id"] = $id['id'];
        //cookie gaan aanmaken om de meest recente login weer te geven
        $data = array(
            'username'  => $username,
            'date' => date("d-m-Y"),
            'time' => date("h:i:sa"),
        );
        setcookie('lastLogin', serialize($data), time() + (86400 * 30), "/"); // 86400 = 1 day
        // @TODO if login succesfull redirect to index
        header('Location: index.php');
        exit();
    }
} else {
    array_push($formErrors, 'Gebruikersnaam of paswoord zijn incorrect ingevuld.');
}


//ik stel me vragen bij de veiligheid van dit? de username letterlijk gaan weergeven is al een stap minder die hackers zouden moeten doen
$variables = [
    'errors' => $formErrors,
    'login' => $name = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : 'false',
];


// render template
$template = $twig->load('registration.twig');
echo $template->render($variables);
