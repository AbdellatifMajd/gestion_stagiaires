<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'nom', 'prenom', 'etablissement', 'email', 'tel', 'service', 'responsable', 'date_debut', 'date_fin'
    ];
}
