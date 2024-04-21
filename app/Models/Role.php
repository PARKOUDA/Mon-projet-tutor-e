<?php

namespace App\Models;

use App\Models\Atos;
use App\Models\Enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;
     /**
     * permet de reccuperer tout les enseignants qui ont un role spécifique
     *
     * @return void
     */
    public function enseignants(){
        return $this->hasMany(Enseignant::class);
    }

     /**
     * permet de reccuperer tout les atos qui ont un role spécifique
     *
     * @return void
     */
    public function atos(){
        return $this->hasMany(Atos::class);
    }
}
