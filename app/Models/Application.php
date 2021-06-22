<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function cat()
    {
        return $this->belongsTo('App\Models\Category', 'cat_id');
    }
}
