<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Fonction;
use Monolog\Handler\RollbarHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Atos extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    protected $guard = 'atos';

    protected $fillable = [
        'Matricule',
        'Nom',
        'Prenom',
        'Telephone',
        'Email',
        'Genre',
        'Mot_de_passe',
        'structure_id',
        'Photo',
        'emploi_id',
        'fao_id',
        'role',
    ];

    protected $table = 'atos';
    /**
     * reccupère la structure d'un personnel atos
     *
     * @return void
     */
    public function structure(){
        return $this->belongsTo(Structure::class);
    }
     /**
     * reccupère le role de l'atos
     *
     * @return void
     */
    public function role(){
        return $this->belongsTo(Role::class);
    }

    /**
     * reccupère la fonction administrative occupée de l'atos
     *
     * @return void
     */
    public function fao(){
        return $this->belongsTo(Fao::class);
    }
    /**ufr
     * reccupère l'emploi de l'atos
     *
     * @return void
     */
    public function emploi(){
        return $this->belongsTo(Emploi::class);
    }

    // affiche la ou la photo se trouve dans notre projet laravel  
    public function photoUrl() {
        return Storage::url($this->Photo);
    }
}
