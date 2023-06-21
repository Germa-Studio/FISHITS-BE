<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionPic extends Model
{
    use HasFactory;
    protected $table = 'regionPic';
    protected $fillable = [
        'name',
        'file',
        'month',
    ];
}
