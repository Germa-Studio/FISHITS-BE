<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bubble extends Model
{
    use HasFactory;
    protected $table = 'bubbles';
    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'month',
        'year',
    ];
    public $timestamps = false;
}
