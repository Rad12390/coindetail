<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
     use HasFactory;

     protected $table = 'coins_details';

     protected $fillable = [
        'id',
        'name',
        'symbol',
    ];
}
