<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'name', 
        'method', 
        'season_id',
        'type',
        'price',
        'image',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function season() {
        return $this->belongsTo('App\Season');
    }

    public function ingredients() {
        return $this->belongsToMany('App\Ingredient');
    }
}
