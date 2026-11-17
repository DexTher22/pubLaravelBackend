<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ListDrinkService;
use App\Services\CreateDrinkService;
use App\traits\ResponseHandler;
use App\Models\Drink;
use App\Http\Requests\DrinkRequest;

class DrinkController extends Controller{

    use ResponseHandler;

    public function __construct(protected ListDrinkService $listDrinkService,
                                protected CreateDrinkService $createService) {}

    public function getDrinks() {
        $drinks = $this->listDrinkService->getDrinks();
        return $this->sendResponse($drinks, 'Siker', 200);
    }

    public function getDrink(Drink $drink) {
        
        return $this->listDrinkService->getDrink($drink);
    }

    public function createDrink(DrinkRequest $request) {

        $validated = $request->validated();

        $drink = $this->$createService->createNewModel($validated);

        return $this->sendResponse($drink->name, 'Sikeres írás', 201);
    }

}
