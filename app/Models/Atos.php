<?php

namespace App\Models;

use App\Models\Structure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Atos extends Model
{
    use HasFactory;
    /**
     * reccupère la structure d'un personnel atos
     *
     * @return void
     */
    public function structure(){
        return $this->belongsTo(Structure::class);
    }
}
