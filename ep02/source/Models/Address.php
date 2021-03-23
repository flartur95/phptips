<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Adress extends DataLayer{

    public function __construct(){
        parent::__construct ("addresses", [], "", false);
    }
    
}