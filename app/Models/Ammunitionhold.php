<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ammunitionhold extends Model
{
    use HasFactory;

    public function spaceships()
    {
        return $this->belongsToMany(Spaceship::class, 'ammunitionhold_spaceship', 'ammunitionhold_id', 'spaceship_id');
    }
}
