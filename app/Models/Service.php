<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'description', 'icon', 'image', 'type', 'sort_order'];

    protected $casts = ['sort_order' => 'integer'];
}
