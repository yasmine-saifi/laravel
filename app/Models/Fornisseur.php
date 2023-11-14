<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornisseur extends Model
{
    use HasFactory;
    protected  $table='fornisseurs';
    protected $fillable=[
        'nom',
        'ville',
    ];
}
