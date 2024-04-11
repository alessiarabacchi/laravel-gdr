<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
}

class Character extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
