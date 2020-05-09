<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Type;
use App\Models\Ingredient;
use App\User;
use Illuminate\Support\Str;

class CreateDataController extends Controller
{
    public function  __invoke()
    {
        $types = Type::all();
        $ingredients = Ingredient::all();
        return view('create', [
            'allTypes' => $types,
            'ingredients' => $ingredients
        ]);
    }
}
