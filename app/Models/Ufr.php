<?php

namespace App\Models;

use App\Models\Structure;
use App\Models\Enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ufr extends Model
{
    use HasFactory;
     /**
     * permet de reccuperer tout les enseignants qui ont un ufr spécifique
     *
     * @return void
     */
    public function enseignants(){
        return $this->hasMany(Enseignant::class);
    }
      /**
     * permet de reccuperer la structure d'une ufr
     *
     * @return void
     */
    public function structure(){
        return $this->belongsTo(Structure::class);
    }
}