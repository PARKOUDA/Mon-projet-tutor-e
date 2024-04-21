<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom'
    ];
    /**
     * permet de reccuperer tout les atos qui ont un emploi spécifique
     *
     * @return void
     */
    public function atos(){
        return $this->hasMany(Atos::class);
    }
}
