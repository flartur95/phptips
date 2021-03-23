<?php

require __DIR__ . "/../vendor/autoload.php";

// use CoffeeCode\DataLayer\Connect;

// $conn = Connect::getInstance();
// $error = Connect::getError();

// if($error){
//     echo $error->getMessage();
//     die();
// }

// $query = $conn->query("SELECT * FROM contact"); 
// var_dump($query->fetchAll());

use Source\Models\User;

$user = new User();
$list = $user->find()_>fetch(true);

