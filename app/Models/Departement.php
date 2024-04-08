<?php

namespace App\Models;

use App\Models\Ufr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;

     /**
     * permet de reccuperer un ufr
     *
     * @return void
     */
    public function ufr(){
        return $this->belongsTo(Ufr::class);
    }
}
