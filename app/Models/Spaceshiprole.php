<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spaceshiprole extends Model
{
    use HasFactory;

    public function spaceship()
    {
        return $this->hasMany(Spaceship::class, 'spaceshipfid');
    }
}
