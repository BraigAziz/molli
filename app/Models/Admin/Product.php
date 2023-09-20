<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'short_description',
        'additional',
        'price',
        'image',
    ];
    public function images()
    {
        return $this->hasMany('App\Models\Admin\ProductImage');
    }

}
