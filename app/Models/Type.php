<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function characters()
    {
        return $this->hasMany(Character::class);
    }
    public function characters()
    {
        return $this->belongsToMany(Character::class)->withPivot('quantity');
    }
}

