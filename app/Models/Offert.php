<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offert extends Model
{

    protected $table='offers';

    protected $fillable = [
        'name', 'price' , 'details' ,
    ];


    protected $hidden = [
        'created_at' , 'updated_at',
    ];

    public $timestamps = false;

}
