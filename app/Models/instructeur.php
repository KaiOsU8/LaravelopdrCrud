<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instructeur extends Model
{
    use HasFactory;
    public $table = 'instructeur';

    protected $fillable = [
        'Voornaam',
        'Tussenvoegsel',
        'Achternaam',
        'Mobiel',
        'DatumInDienst',
        'AantalSterren'
    ];
}
