<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ufr extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom'
    ];
    /**
     * permet de reccuperer tout les enseignants qui ont une ufr spécifique
     *
     * @return void
     */
    public function enseignants(){
        return $this->hasMany(Enseignant::class);
    }

    public function departements()
    {
        return $this->hasMany(Departement::class);
    }
}
