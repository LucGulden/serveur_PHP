<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correspond extends Model
{
    protected $table = 'correspond';
    public $timestamps = false;
    protected $fillable = ['id_article', 'id_categorie'];
}
