<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localite extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'commune_id'];

    public function personnes()
    {
        return $this->hasMany(Personne::class);
    }

    /**
     * Get all of the comments for the localite
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }
}
