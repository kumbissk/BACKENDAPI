<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commune extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'departement_id'];


    /**
     * Get all of the comments for the commune
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    /**
     * Get all of the comments for the commune 
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */

    public function localites(): HasMany
    {
        return $this->hasMany(Localite::class);
    }
}
