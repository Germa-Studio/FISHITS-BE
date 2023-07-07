<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bubble extends Model
{
    use HasFactory;
    protected $table = 'bubbles';
    protected $fillable = [
        'latitude',
        'longitude',
    ];
    public $timestamps = false;
}
