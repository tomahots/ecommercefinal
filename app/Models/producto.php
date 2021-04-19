<?php

namespace App\Models;

use App\Models\imagen;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class producto extends Model
{
    use HasFactory;
    
    public function imagen(){
        return $this->hasmany(imagen::class);
    }
}
