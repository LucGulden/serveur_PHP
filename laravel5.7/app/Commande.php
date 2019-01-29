<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commande';
    public $timestamps = false;
    protected $fillable = ['id_commande', 'achevement_commande'];
}
