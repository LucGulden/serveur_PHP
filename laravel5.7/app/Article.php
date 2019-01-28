<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    public $timestamps = false;
    protected $fillable = ['id_article', 'nom_article','prix_article','description_article','nbr_ventes_article','stock_article','image_article'];
}
