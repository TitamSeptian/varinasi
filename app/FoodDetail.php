<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodDetail extends Model
{
	protected $guarded = ['id'];
    protected $table = 'food_details';
    protected $primaryKey = 'id';

    public function ingredient()
    {
    	return $this->belongsTo(Ingredient::class);
    }

    public function food()
    {
    	return $this->belongsTo(Food::class);
    }
}
