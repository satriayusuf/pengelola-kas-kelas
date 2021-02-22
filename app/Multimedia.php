<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    protected $table = 'multimedia';
    protected $fillable = [
        'id', 'name', 'file', 'date', 'time'
    ];
}
