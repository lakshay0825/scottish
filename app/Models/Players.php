<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'country',
        'email',
        'phone',
        'category',
        'profile_photo',
        'optional_round',
    ];

    protected $casts = [
        'optional_round' => 'boolean',
    ];
}
