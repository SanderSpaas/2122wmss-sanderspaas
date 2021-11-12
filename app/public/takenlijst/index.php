<?php
session_start();
if ($_SESSION['logged_in'] == false) {
    header('Location: login.php');
    exit();
}
/**
 * Lab 06 — Start from this version
 * Tasklist
 * @author Sander Spaas
 */

require_once ('../../vendor/autoload.php');
require_once ('../../config/database.php');
require_once ('../../src/Services/DatabaseConnector.php');

// @TODO Fetch database connection
$connection = \Services\DatabaseConnector::getConnection();
// @TODO Bootstrap Twig 
$loader = new \Twig\Loader\FileSystemLoader(__DIR__ . '/../../resources/templates');
$twig = new Twig\Environment($loader, [
    'cache' => __DIR__ . '/../../storage/cache',
    'auto_reload' => true
]);
// Initial Values
$priorities = ['low', 'normal', 'high']; // The possible priorities of a task
$formErrors = [ ]; // The encountered form errors

$what = isset($_POST['what']) ? $_POST['what'] : ''; 
$priority = isset($_POST['priority']) ? $_POST['priority'] : 'low';

// Handle action 'add' (user pressed add button)
if (isset($_POST['moduleAction']) && ($_POST['moduleAction'] === 'add')) {
    if (trim($what) !== '' && in_array(trim($priority), $priorities)){
        try{
            $statement = $connection->prepare('INSERT INTO tasks (name, priority, added_on) VALUES (?,?,NOW())');
            $result = $statement->executeStatement([$what, $priority]);
            // @TODO if insert query succeeded: redirect to this very same page
            header('Location: index.php');
            exit();
        }catch(Exception $e){
            array_push($formErrors, 'Er is een fout bij het sturen naar de database: '.$e);
        }
    }
    if (trim($what) == ''){
        array_push($formErrors, "Voer een naam in voor je taak!");
    }
    if (!in_array(trim($priority), $priorities)){
        array_push($formErrors, "Ongeldige prioriteit geselecteerd");
    }

}

// No action to handle: show our page itself

// @TODO get all task items from the databases
$query = 'SELECT * FROM tasks';
$query = $connection->query($query);
$tasks = $query->fetchAllAssociative();

$variables = [
    'tasks' => $tasks,
    'errors' => $formErrors,
    'priorities' => $priorities,
    'login' => $name = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : 'unset',
];


// render template and persist $formErrors, $what, $priority and show $tasks
$template = $twig->load('index.twig');
echo $template->render($variables);