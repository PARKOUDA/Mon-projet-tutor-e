<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fonction extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom'
    ];
    /**
     * permet de reccuperer tout les enseignants qui ont une fonction spécifique
     *
     * @return void
     */
    public function enseignants(){
        return $this->hasMany(Enseignant::class);
    }
}
