<?php

namespace Http;

use Services\DatabaseConnector;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class CompaniesController
{
    private $databaseConnection;
    private $twigEngine;
    public function __construct()
    {
        $this->databaseConnection = \Services\DatabaseConnector::getConnection();
        $loader = new FilesystemLoader(__DIR__ . '/../../resources/templates');
        $this->twigEngine = new Environment($loader, [
            'cache' => __DIR__ . '/../../storage/cache',
            'auto_reload' => true //set to false on production
        ]);
    }
    public function overview()
    {
        $companies = $this->findCompanies('');
        echo $this->twigEngine->render('companies/overview.twig', ['companies' => $companies]);
    }
    public function search()
    {
        $companies = $this->findCompanies('');
        echo $this->twigEngine->render('companies/overview.twig', ['companies' => $companies]);
    }
    // public function create()
    // {
    //     die('now');
    // }

    //search function
    private function findCompanies($search = ''){
        $query = "SELECT * FROM companies";

        if ($search){
            $query .= ' WHERE name LIKE name=":name";';
        }
        $result = $this->databaseConnection->query($query);
        return $result->fetchAllAssociative();
    }
}
