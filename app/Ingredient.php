<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $guarded = ['id'];
    protected $table = 'ingredients';
    protected $primaryKey = 'id';

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function foodDetail()
    {
        return $this->hasMany(foodDetail::class);
    }
}
