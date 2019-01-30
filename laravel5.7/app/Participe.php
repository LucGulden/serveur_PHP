<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participe extends Model
{
    protected $fillable = ['id_users', 'id_events'];
    public $timestamps = false;
    protected $table = 'participe';
}
