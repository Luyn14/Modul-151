<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipequipment extends Model
{
    use HasFactory;

    public function spaceships()
    {
        return $this->belongsToMany(Spaceship::class, 'shipequipment_spaceship', 'shipequipment_id', 'spaceship_id');
    }
}
