<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['username', 'institute', 'phone', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function items() {
        return $this->hasMany(Item::class, 'giver_id');
    }

    public function requests() {
        return $this->hasMany(Request::class, 'wanter_id');
    }
}

