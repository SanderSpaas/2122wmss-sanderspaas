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
$priorities = ['low', 'normal', 'high']; // The possible priorities of a task
$formErrors = []; // The encountered form errors

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0; // The id of the task passed by the URL
// $postID = isset($_POST['id']) ? (int) $_POST['id'] : 0;
$tasks = [];


// check if item exists (use the id from the $_POST array!)
// @TODO Get the item from the database
$query = 'SELECT * FROM tasks WHERE id=' . $id . '';
$query = $connection->query($query);
$tasks = $query->fetchAllAssociative();
if (count($tasks) <= 0) {
    // @TODO Check if the passed id (in $_GET) exists as a task item (if it fails, redirect to index.php)
    header('Location: index.php');
    exit();
}

// Handle action 'delete' (user pressed delete button)
if (isset($_POST['moduleAction']) && ($_POST['moduleAction'] == 'delete')) {
    try {
        // @TODO if no errors: deletes values in the database
        $statement = $connection->prepare('DELETE FROM tasks WHERE id=?');
        $result = $statement->executeStatement([$id]);
        // @TODO if query succeeded: redirect to index.php
        header('Location: index.php');
        exit();
    } catch (Exception $e) {
        // @TODO (if an error was encountered, add it to the $formErrors array)
        array_push($formErrors, 'Er is een fout bij het sturen naar de database: ' . $e);
    }
}




$variables = [
    'id' => $id,
    'tasks' => $tasks,
    'errors' => $formErrors,
    'priorities' => $priorities,
    'login' => $name = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : 'false',
];
// No action to handle: show edit page



// @TODO If the form has not been sent, overwrite the $what and $priority parameters

// render template and persist $what and $priority 
$template = $twig->load('delete.twig');
echo $template->render($variables);
