<?php

namespace App\Models;

use App\Models\Ufr;
use App\Models\Atos;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Structure extends Model
{
    use HasFactory;
     /**
     * permet de reccuperer tout les personnels atos qui ont une structure spécifique
     *
     * @return void
     */
    public function atos(){
        return $this->hasMany(Atos::class);
    }
     /**
     * permet de reccuperer tout les ufrs d'une structure
     *
     * @return void
     */
    public function ufrs(){
        return $this->hasMany(Ufr::class);
    }
      /**
     * permet de reccuperer tout les postes d'une structure 
     *
     * @return void
     */
    public function postes(){
        return $this->belongsToMany(Post::class);
    }
}
