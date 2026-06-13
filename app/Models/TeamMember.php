<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = ['name', 'role', 'tier', 'photo', 'bio', 'sort_order'];

    protected $casts = ['sort_order' => 'integer'];
}
