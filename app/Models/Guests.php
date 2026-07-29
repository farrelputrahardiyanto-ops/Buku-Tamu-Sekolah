<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guests extends Model
{
    protected $table = 'guests';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'comment',
        'img'
    ];
}
