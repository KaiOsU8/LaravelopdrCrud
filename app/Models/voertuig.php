<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voertuig extends Model
{
    use HasFactory;
    public $table = 'voertuig';

    protected $fillable = [
        'Kenteken',
        'Type',
        'Bouwjaar',
        'Brandstof',
        'TypeVoertuigId'
    ];
}
