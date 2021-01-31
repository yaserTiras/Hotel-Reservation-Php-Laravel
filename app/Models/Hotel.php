<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo( Category::class);
    }

    public function shopcart()
    {
        return $this->hasMany( Shopcart::class);
    }
    public function room()
    {
        return $this->hasMany( Room::class);
    }
}
