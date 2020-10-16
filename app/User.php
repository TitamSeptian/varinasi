<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = ['id'];
    protected $hidden = ['password'];
    protected $table = 'users';
    protected $primaryKey = 'id';

    public function calorieUse()
    {
        return $this->hasMany(CalorieUse::class);
    }

}
