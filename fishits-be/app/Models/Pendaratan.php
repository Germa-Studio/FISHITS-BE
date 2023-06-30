<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaratan extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'pendaratans';
    protected $fillable = [
        'berat',
        'harga',
        'nilaiProduksi',
        'monthYear',
        'fish_id',
    ];

    // public function fish()
    // {
    //     return $this->belongsTo(Fish::class, 'fish_id');
    // }
}
