<?php

/**
 * Exercise 1.4
 * @author Sander Spaas sander.spaas@student.odisee.be
 */

 $dateString = $argv[1];

 try{ 
     $dateTimeObject = new DateTime($dateString);
     echo $dateTimeObject->format('Y-m-d H:i');
    } catch (Exception $exception){
        echo 'not a valid date: ' . $dateString;
    }

