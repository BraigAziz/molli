<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
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
