<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $guarded = ['id'];
    protected $hidden = ['password'];
    protected $table = 'foods';
    protected $primaryKey = 'id';

    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class);
    }

    public function calorieUse()
    {
        return $this->hasMany(CalorieUse::class)
    }
}
