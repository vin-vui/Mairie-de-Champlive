<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'cp',
        'city',
        'mail',
        'phone',
        'description',
        'status',
    ];
}
