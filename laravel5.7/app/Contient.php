<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contient extends Model
{
    protected $table = 'contient';
    public $timestamps = false;
    protected $fillable = ['id_users', 'id_events'];
}
