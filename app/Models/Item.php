<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Item extends Model
{
    use HasFactory;

    // Add the attributes you want to allow for mass assignment
    protected $fillable = ['menu', 'quantity', 'expires_at', 'giver_id'];

    public function giver() {
        return $this->belongsTo(User::class, 'giver_id');
    }

    public function requests() {
        return $this->hasMany(Request::class);
    }

}
