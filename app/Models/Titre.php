<?php

namespace App\Models;

use App\Models\Enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Titre extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom'
    ];
     /**
     * permet de reccuperer tout les enseignants qui ont un titre spécifique
     *
     * @return void
     */
    public function enseignants(){
        return $this->hasMany(Enseignant::class);
    }

    
}
