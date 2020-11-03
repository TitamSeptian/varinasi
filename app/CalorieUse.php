<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalorieUse extends Model
{
    protected $guarded = ['id'];
    protected $table = 'calorie_uses';
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function food()
    {
        return $this->belongsTo(Food::class, "food_id");
    }
}
