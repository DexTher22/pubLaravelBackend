<?php

namespace App\services;

class CreateDrinkService {

    public function __construct() {}

    public function createNewModel() {

        $drink = new Drink();
        $drink->name = $request['name'];
        $drink->amount = $request['amount'];
        $drink->price = $request['price'];
        $drink->type_id = 1;
        $drink->package_id = 1;
    }    
}