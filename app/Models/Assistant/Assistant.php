<?php

namespace App\Models\Assistant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
{
    use HasFactory;

    protected $guard = 'admin';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
    ];

    protected $hidden = [
        'password',
    ];
}
