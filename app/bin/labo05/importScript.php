<?php
require_once ('../../vendor/autoload.php');
require_once ('../../config/database.php');
require_once ('../../src/Services/DatabaseConnector.php');
$fileName = __DIR__. "/../../resources/companies.csv";
$connection = \Services\DatabaseConnector::getConnection();
$row = 1;
$statement = $connection->prepare('INSERT INTO companies (name, address, zip, city, activity, vat, date_added) VALUES ( :name, :address, :zip, :city, :activity, :vat, NOW());');

    if (($handle = fopen($fileName, 'r')) != FALSE){
        while (($company = fgetcsv($handle, 1000, ',')) != FALSE){
            $statement->bindValue(':name', $company[0]);
            $statement->bindValue(':address', $company[1]);
            $statement->bindValue(':zip', $company[2]);
            $statement->bindValue(':city', $company[3]);
            $statement->bindValue(':activity', $company[4]);
            $statement->bindValue(':vat', $company[5]);

            $statement->execute();

            $row++;
        }
        fclose($handle);   

    }