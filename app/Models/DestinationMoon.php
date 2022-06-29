<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationMoon extends Model
{
    use HasFactory;

    protected $table = 'destinationMoon';

    public function spaceships()
    {
        return $this->hasMany(Spaceship::class, 'spaceshipfid');
    }

    public function moon()
    {
        return $this->belongsTo(Moon::class);
    }


    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
