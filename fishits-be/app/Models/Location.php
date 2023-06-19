<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'latitude',
        'longitude',
        's',
        'e',
    ];

    public function fish()
    {
        return $this->belongsToMany(
            Fish::class,
            'fish_has_locations',
            'locations_id',
            'fish_id');
    }
}
