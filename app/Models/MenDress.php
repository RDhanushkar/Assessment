<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenDress extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'photo',
        'price',
        'detail',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

}
