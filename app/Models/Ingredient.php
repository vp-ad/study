<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function dishes(){
        return $this->belongsToMany(Dish::class);
    }
}
