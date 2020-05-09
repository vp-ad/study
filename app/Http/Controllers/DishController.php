<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Type;
use App\Models\Ingredient;
use App\User;
use Illuminate\Support\Str;
use App\Http\Requests\DishRequest;

class DishController extends Controller
{
    public function  index(){
        $dishes = Dish::all();
        return view('home', ['dishes' => $dishes]);
    }
    public function show($slug){
        $dish = Dish::where('slug', "=", $slug)->first();
        return view('recipe', ['dish' => $dish]);
    }

    public function create(DishRequest $req){
        $user = auth()->user()->id;
        $ingredients_id = $req->input('ingredient_name');
        $ingredients_weight = $req->input('ingredient_weight');
        $types = $req->input('category');
        $file = $req->file('img');
        $file->move('images', $file->getClientOriginalName());
        $dish = new Dish();
        $dish->name = $req->input('name');
        $dish->slug = Str::slug($dish->name);
        $dish->user_id = $user;
        $dish->description = nl2br($req->input('cooking'));
        $dish->about = $req->input('about');
        $dish->image = 'images/' . $file->getClientOriginalName();
        $dish->time = $req->input('hour') . 'ч. ' . $req->input('minute') . 'мин.';
        $dish->portion = $req->input('count');
        $dish->save();
        for($i=0; $i<count($ingredients_id); $i++){
            $dish->ingredients()->attach($ingredients_id[$i], ['weight' => $ingredients_weight[$i]]);
        }
        $dish->types()->attach($types);
        return redirect('/');
    }
}
