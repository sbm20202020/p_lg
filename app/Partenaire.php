<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    protected $fillable = [
        'businessnam','adresse_physique','type','email','phone','image'
];
}
