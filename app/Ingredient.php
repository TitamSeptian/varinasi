<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $guarded = ['id'];
    protected $hidden = ['password'];
    protected $table = 'ingredients';
    protected $primaryKey = 'id';

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function food()
    {
        return $this->hasMany(Food::class);
    }
}
