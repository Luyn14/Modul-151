<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spaceship extends Model
{
    use HasFactory;

    public function cargoholds()
    {
        return $this->belongsToMany(Cargohold::class, 'cargo_spaceship', 'spaceship_id', 'cargohold_id');
    }

    public function ammunitionholds()
    {
        return $this->belongsToMany(Ammunitionhold::class, 'ammunitionhold_spaceship', 'spaceship_id', 'ammunitionhold_id');
    }

    public function shipequipments()
    {
        return $this->belongsToMany(Shipequipment::class, 'shipequipment_spaceship', 'spaceship_id', 'shipequipment_id')->withPivot('amount');
    }

    public function destinationMoon()
    {
        return $this->belongsTo(DestinationMoon::class, 'destinationMoon_id', 'id');
    }

    public function spaceshiprole()
    {
        return $this->belongsTo(Spaceshiprole::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
