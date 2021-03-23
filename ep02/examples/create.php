<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = new User();
$user->first_name = "Padre";
$user->last_name = "Lele";
$user->genre = "M";
$user->save();

$addr = new Adress();
$addr ->add($user, "Nome da Rua", "22b");
$addr->save();