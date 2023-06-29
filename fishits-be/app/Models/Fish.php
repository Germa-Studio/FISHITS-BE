<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Fish extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'weight',
        'price'
        // 'locations_id'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'users_has_fish', 'fish_id', 'users_id')
                    ->withPivot('amount', 'bbm')
                    ->withTimestamps();
    }

    // public function locations(): BelongsTo
    // {
    //     return $this->belongsTo(Location::class, 'locations_id');
    // }
}
