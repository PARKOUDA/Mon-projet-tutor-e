<?php

namespace App\Models;

use App\Models\Structure;
use App\Models\Enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
     /**
     * permet de reccuperer tout les enseignants qui ont un poste spécifique
     *
     * @return void
     */
    public function enseignants(){
        return $this->hasMany(Enseignant::class);
    }
      /**
     * permet de reccuperer tout les structure  d'un poste
     *
     * @return void
     */
    public function structures(){
        return $this->belongsToMany(Structure::class);
    }
}
