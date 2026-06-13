<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category', 'description', 'icon', 'sort_order'];

    protected $casts = ['sort_order' => 'integer'];
}
