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
        $this->belongsTo(User::class);
    }

    public function food()
    {
        $this->belongsTo(Food::class);
    }
}
