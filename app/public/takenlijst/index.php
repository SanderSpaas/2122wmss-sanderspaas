<?php

/**
 * Lab 06 — Start from this version
 * Tasklist
 * @author <your name>
 */

require_once ('../../vendor/autoload.php');
require_once ('../../config/database.php');
require_once ('../../src/Services/DatabaseConnector.php');

// @TODO Fetch database connection

// @TODO Bootstrap Twig 

// Initial Values
$priorities = ['low', 'normal', 'high']; // The possible priorities of a task
$formErrors = []; // The encountered form errors

$what = isset($_POST['what']) ? $_POST['what'] : ''; 
$priority = isset($_POST['priority']) ? $_POST['priority'] : 'low';

// Handle action 'add' (user pressed add button)
if (isset($_POST['moduleAction']) && ($_POST['moduleAction'] === 'add')) {

    // check parameters

    // @TODO (if an error was encountered, add it to the $formErrors array)

    // @TODO if no errors: insert values into database

    // @TODO if insert query succeeded: redirect to this very same page

}

// No action to handle: show our page itself

// @TODO get all task items from the databases

// render template and persist $formErrors, $what, $priority and show $tasks

