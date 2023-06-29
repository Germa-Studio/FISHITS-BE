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
    public $timestamps = false;
    protected $fillable = [
        'name',
        // 'locations_id'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'users_has_fish', 'fish_id', 'users_id')
                    ->as('catched')
                    ->withPivot('berat', 'satuanBerat', 'harga', 'bbmTerpakai', 'jarakTempuh', 'pengeluaran', 'pendapatan', 'keuntungan', 'tanggal', 'waktu');
    }

    // public function locations(): BelongsTo
    // {
    //     return $this->belongsTo(Location::class, 'locations_id');
    // }
}
