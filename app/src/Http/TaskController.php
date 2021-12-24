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
        $loader = new FilesystemLoader(__DIR__ . '/../../resources/templates/alela/');
        $this->twigEngine = new Environment($loader, [
            'cache' => __DIR__ . '/../../storage/cache',
            'auto_reload' => true //set to false on production
        ]);
    }
    public function delete($id){

        $result = $this->dbConnection->query("SELECT * FROM tasks where id = $id");
        
        if ($result->rowCount() > 0){
            $removeTask = $this->dbConnection->prepare("DELETE FROM tasks where id =:id");
            $removeTask->bindValue(':id', $id);
            $removeTask = $removeTask->executeQuery();
            $this->message(204, 'Task succesfully removed.' );
        }else{
            $this->message(404, 'Task ID not found.' );
        }
        
    }
    public function update($id){
        $name = $this->httpBody['name'];
        $priority = $this->httpBody['priority'];
        $allok = true;

        if($name == '' ){
            $this->message(400, 'Name must not be empty');
            $allok = false;
        }
        if (strlen($name) < 2 ){
            $this->message(400, 'Name must be longer than 2 characters');
            $allok = false;
        }

        if($priority == '' ){
            $this->message(400, 'Name must not be empty');
            $allok = false;
        }

        if($priority == "low" || $priority == "medium" || $priority == "high"){
            
        }else{
            $this->message(400, 'Wrong priority');
            $allok = false;
        }

        $result = $this->dbConnection->query("SELECT * FROM tasks where id = $id");

        if ($result->rowCount() > 0){
            if($allok){
                $updateTask = $this->dbConnection->prepare("UPDATE tasks SET name = :name, priority = :priority WHERE id = :id");
                $updateTask->bindValue(':name', $name);
                $updateTask->bindValue(':priority', $priority);
                $updateTask->bindValue(':id', $id);
                $updateTask = $updateTask->executeQuery();
                $this->message(204, 'Task succesfully updated.' );
            }else{
                $this->message(422, 'Errors:');
            }
        }else{
            $this->message(404, 'Task ID not found.');
        }
    }
}
