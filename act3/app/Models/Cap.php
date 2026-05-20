<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cap extends Model
{
    protected $fillable = ['name', 'brand', 'era', 'condition', 'image_url'];
}
