<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Adress;

$user = (new User())->findById(6);
$user->first_name = "Jão";

if($user){
    $user->destroy();
}else {
    var_dump($user);
}
