<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Dish;

class Comment extends Model
{
    protected $casts = [
        'updated_at' => 'datetime',
        'created_at' => 'datetime',
    ];

    public function dish(){
        return $this->belongsTo(Dish::class, "dish_id");
    }

    public function author(){
        return $this->belongsTo(User::class, "user_id");
    }
}
