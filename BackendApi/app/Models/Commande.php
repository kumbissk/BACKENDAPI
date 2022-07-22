<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['numero', 'nombreColis', 'poids', 'dateEnregistrement', 'lieuDepart', 'lieuDestination', 'Description', 'uploadPhoto'];

    
    public function personne():HasMany
    {
        return $this->hasMany(Personne::class);
    }
}
