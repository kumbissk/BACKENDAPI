<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $fillable = ['Civilite','Nom', 'Prenom', 'Telephone', 'Address', 'Disponibilite', 'Email', 'MotDePasse', 'Role_id', 'Localite_id'];


    /**
     * Get all of the comments for the personne
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */

    // public function role()
    // {
    //     return $this->belongsTo(Role::class);
    // }

    public function role()
    {
        return $this->hasMany(Role::class);
    }
}
