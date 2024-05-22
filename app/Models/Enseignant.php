<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Titre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Enseignant extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    protected $guard = 'enseignant';


    protected $fillable = [
        'Matricule',
        'Nom',
        'Prenom',
        'Telephone',
        'Email',
        'Genre',
        'password',
        'titre_id',
        'Photo',
        'grade_id',
        'fonction_id',
        'ufr_id',
        'role',
        'departement_id',
    ];

/**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
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
        return $this->belongsTo(Departement::class);
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
