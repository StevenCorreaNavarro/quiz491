<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exemplary extends Model
{
    // use HasFactory;
    public function readers()
    {
        return $this->belongsTomany('App\Models\Reader');
    }
    public function books()
    {
        return $this->belongsTo('App\Models\Book');
    }
}
