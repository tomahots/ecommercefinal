<?php

namespace App\Models;

use App\Models\producto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class imagen extends Model
{
    use HasFactory;

    public function producto(){
        return $this->belongsTo(producto::class);
    }
}
