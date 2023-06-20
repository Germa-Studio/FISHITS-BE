<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;

class ShipType extends Model
{
    use HasFactory;
    protected $table = 'shipType';
    protected $fillable = [
        'name',
        'machine',
        'bbm',
        'speed'
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'shipType_id');
    }
}
