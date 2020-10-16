<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalorieUse extends Model
{
    protected $guarded = ['id'];
    protected $hidden = ['password'];
    protected $table = 'types';
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
