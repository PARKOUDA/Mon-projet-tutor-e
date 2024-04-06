<?php

namespace App\Models;

use App\Models\Enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grade extends Model
{
    use HasFactory;
    /**
     * permet de reccuperer tout les enseignants qui ont un grades spécifique
     *
     * @return void
     */
    public function enseignants(){
        return $this->hasMany(Enseignant::class);
    }
}
