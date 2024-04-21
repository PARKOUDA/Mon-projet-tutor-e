<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Titre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignant extends Model
{
    use HasFactory;
    protected $fillable = [
        'Matricule',
        'Nom',
        'Prenom',
        'Telephone',
        'Email',
        'Mot de passe',
        'titre_id',
        'Photo',
        'grade_id',
        'fonction_id',
        'ufr_id',
        'role_id',
        'departements',
    ];
    // //permet de cacher le mot de passe
    // protected $hidden = [
    //     'Mot de passe',
    // ];

    //permet de masquer le mot de passe dans la base de donnée
    // protected $casts = [
    //     'Mot de passe' => 'hashed'
    // ];
    /**
     * reccupère la grade de l'enseignant
     *
     * @return void
     */
    public function grade(){
        return $this->belongsTo(Grade::class);
    }
    /**
     * reccupère la fonction de l'enseignant
     *
     * @return void
     */
    public function fonction(){
        return $this->belongsTo(Fonction::class);
    }
    /**
     * reccupère l'ufr d'un enseignant
     *
     * @return void
     */
    public function ufr(){
        return $this->belongsTo(Ufr::class);
    }
     /**
     * permet de reccuperer tout les postes d'une structure 
     *
     * @return void
     */
    public function departement(){
        return $this->belongsToMany(Departement::class);
    }

     /**
     * reccupère la grade de l'enseignant
     *
     * @return void
     */
    public function titre(){
        return $this->belongsTo(Titre::class);
    }

     /**
     * reccupère la grade de l'enseignant
     *
     * @return void
     */
    public function role(){
        return $this->belongsTo(Role::class, 'role_id');
    }

    // affiche la ou la photo se trouve dans notre projet laravel 
    public function photoUrl() {
        return Storage::url($this->Photo);
    }
}
