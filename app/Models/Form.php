<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name',
        'fb_acc',
        'phone',
        'job',
        'school',
        'programming',
        'framework',
        'web',
        'class',
        'payment',
        'amount',
        'screenshot'
    ];
}
