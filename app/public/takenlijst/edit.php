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
$what = isset($_POST['what']) ? $_POST['what'] : ''; // The task that was sent via the form
$priority = isset($_POST['priority']) ? $_POST['priority'] : 'low'; // The priority that was sent via the form
$user_id = $_SESSION['user_id'];


// check if item exists (use the id from the $_POST array!)
// @TODO Get the item from the database
// $id = (int) $_POST['id'];
$tasksfetch = $connection->executeQuery('SELECT * FROM tasks WHERE id=?', array($id));
$tasks = $tasksfetch->fetchAllAssociative();
$task = $tasks[0];
if (count($tasks) <= 0 || $task['user_id'] !== $user_id) {
    // @TODO Check if the passed id (in $_GET) exists as a task item (if it fails, redirect to index.php)
    header('Location: index.php');
    exit();
}

// echo "UPDATE tasks SET name=$what priority=$priority WHERE id=$id";
// Handle action 'edit' (user pressed edit button)
if (isset($_POST['moduleAction']) && ($_POST['moduleAction'] == 'edit')) {

    if (trim($what) !== '' && in_array(trim($priority), $priorities)) {
        try {
            // @TODO if no errors: updates values in the database
            $statement = $connection->prepare('UPDATE tasks SET name=?, priority=?, added_on=NOW() WHERE id=?');
            $result = $statement->executeStatement([$what, $priority, $id]);
            // @TODO if query succeeded: redirect to index.php
            header('Location: index.php');
            exit();
        } catch (Exception $e) {
            // @TODO (if an error was encountered, add it to the $formErrors array)
            array_push($formErrors, 'Er is een fout bij het sturen naar de database: ' . $e);
        }
    }
    if (trim($what) == '') {
        array_push($formErrors, "Voer een naam in voor je taak!");
    }
    if (!in_array(trim($priority), $priorities)) {
        array_push($formErrors, "Ongeldige prioriteit geselecteerd");
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
$template = $twig->load('edit.twig');
echo $template->render($variables);
