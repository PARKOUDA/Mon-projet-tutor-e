<?php

namespace App\Models;

use App\Models\Ufr;
use App\Models\Post;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignant extends Model
{
    use HasFactory;
    /**
     * reccupère la grade de l'enseignant
     *
     * @return void
     */
    public function grade(){
        return $this->belongsTo(Grade::class);
    }
    /**
     * reccupère le poste de l'enseignant
     *
     * @return void
     */
    public function poste(){
        return $this->belongsTo(Post::class);
    }
    /**
     * reccupère l'ufr d'un enseignant
     *
     * @return void
     */
    public function ufr(){
        return $this->belongsTo(Ufr::class);
    }
}
