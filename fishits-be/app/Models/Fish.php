<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'weight',
        'price',
    ];

    public function locations()
    {
        return $this->belongsToMany(
            Location::class,
            'fish_has_locations',
            'fish_id',
            'locations_id');
    }
}
