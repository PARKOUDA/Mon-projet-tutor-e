<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fao extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom'
    ];

    /**
     * permet de reccuperer tout les atos qui ont une fao spécifique
     *
     * @return void
     */
    public function atos(){
        return $this->hasMany(Atos::class);
    }
}
