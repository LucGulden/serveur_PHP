<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categorie';
    public $timestamps = false;
    protected $fillable = ['id_categorie', 'nom_categorie'];
}
