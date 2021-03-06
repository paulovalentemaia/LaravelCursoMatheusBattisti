<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];

    //tudo que for enviado pelo post pode ser enviado
    protected $guarded = [];

    //One to Many - Pertence a um
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    //Many to Many
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
