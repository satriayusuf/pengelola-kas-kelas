<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datakeluar extends Model
{
	public $table = "datakeluar";
    protected $fillable = [
        'deskripsi', 'jumlahkeluar', 'date',
    ];
}
