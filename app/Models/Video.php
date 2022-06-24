<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table='videos';

    protected $fillable = [
        'name','viewer',
    ];


    protected $hidden = [
        'created_at' , 'updated_at',
    ];

    public $timestamps = false; //Null of false
}
