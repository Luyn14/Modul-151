<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargohold extends Model
{
    use HasFactory;

    public function spaceships()
    {
        return $this->belongsToMany(Spaceship::class, 'cargo_spaceship', 'cargohold_id', 'spaceship_id');
    }
}
