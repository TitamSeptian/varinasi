<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodDetail extends Model
{
    public function ingredient()
    {
    	return $this->belongsTo(Ingredient::class);
    }

    public function food()
    {
    	return $this->belongsTo(Food::class);
    }
}
