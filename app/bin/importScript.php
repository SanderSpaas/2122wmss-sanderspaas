<?php

/**
 * Lab 05 — Start from this version
 * Companies
 * @author Sander Spaas
 */

 //depencies
require_once(__DIR__ . '../../vendor/autoload.php');
require_once(__DIR__ . '../../config/database.php');
require_once(__DIR__ . '../../src/Services/DatabaseConnector.php');

$connection = \Services\DatabaseConnector::getConnection();

$row = 0;
$headers = array();
if (($file = fopen("../public/labo05/recources/companies.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($file)) !== FALSE) {
        $num = count($data);
        // echo "$num fields in line $row\n";
        
        if ($row == 0) {
            for ($i = 0; $i < $num; $i++) {
                // echo $data[$c] . "\n";
                array_push($headers, $data[$i]);
            }
        }
        $row++;
    }
    fclose($file);
}

//testqueries
$insertQuery = 'INSERT INTO companies (name, address, zip, city, activity, vat, date_added) VALUES (:name, :addres, :zip, :city, :activity, :vat, :date_added)';
$stmt = $connection->prepare($insertQuery);
// $result = $stmt->executeStatement(['test', 4]);

print_r($headers);
