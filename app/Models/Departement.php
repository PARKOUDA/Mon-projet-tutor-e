<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom'
    ];
    /**
     * permet de reccuperer tout les enseignants  d'un département
     *
     * @return void
     */
    public function enseignants(){
        return $this->hasMany(Enseignant::class);
    }
}
