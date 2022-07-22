<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $fillable = ['Civilite','Nom', 'Prenom', 'Telephone', 'Address', 'Disponibilite', 'Email', 'MotDePasse', 'Role_id'];

    
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
