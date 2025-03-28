<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    use HasFactory;
    public function exemplaries()
    {
        return $this->belongsToMany('App\Models\Exemplary');
    }
}
