<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $casts = [
        'updated_at' => 'datetime',
        'created_at' => 'datetime',
    ];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function path(){
        return route("dish.show", $this->slug);
    }

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class)
            ->withPivot('weight');
    }

    public function types(){
        return $this->belongsToMany(Type::class);
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
