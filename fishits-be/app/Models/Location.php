<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Fish;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        's',
        'e',
    ];

    // public function fish()
    // {
    //     return $this->belongsToMany(
    //         Fish::class,
    //         'fish_has_locations',
    //         'locations_id',
    //         'fish_id');
    // }

    // public function fish(): HasMany
    // {
    //     return $this->hasMany(Fish::class, 'locations_id');
    // }
}
