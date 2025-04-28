<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shamba extends Model
{
    use HasFactory;
    protected $fillable = [
       'jina_la_shamba',
       'ukubwa_wa_shamba',
       'aina_ya_zao',
       

    ];
}
