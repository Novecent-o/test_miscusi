<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = [
        'name', 
    ];

    public function dishes() {
        return $this->hasMany('App\Dish');
    }
}
