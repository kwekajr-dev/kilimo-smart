<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ratiba extends Model
{
    use HasFactory;
    protected $fillable = [
        'kazi',
        'tarehe',

    ];
}
