<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $guarded = ['id'];
    protected $table = 'foods';
    protected $primaryKey = 'id';

    // public function ingredient()
    // {
    //     return $this->belongsTo(Ingredient::class);
    // }

    public function calorieUse()
    {
        return $this->hasMany(CalorieUse::class);
    }

    public function foodDetail()
    {
        return $this->hasMany(FoodDetail::class);
    }
}
