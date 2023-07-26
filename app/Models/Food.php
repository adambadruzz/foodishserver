<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_food';
    protected $fillable = [
        'cover',
        'food_name',
        'short_description',
        'place',
        'description',
    ];
}
