<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventsModel extends Model
{
    protected $fillable = [
        'nom_event',
        'description_event',
        'image_event',
     ];
}
