<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = ['id'];
    protected $hidden = ['password'];
    protected $table = 'types';
    protected $primaryKey = 'id';

    public function ingredient()
    {
        return $this->hasMany(Ingredient::class);
    }
}
