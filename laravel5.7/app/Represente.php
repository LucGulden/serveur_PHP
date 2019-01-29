<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Represente extends Model
{
    protected $fillable = ['id_photos', 'id_events'];
    public $timestamps = false;
    protected $table = 'represente';
}
