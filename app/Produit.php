<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'nom', 'description', 'promotion','type_produit', 'nom_image'
    ];

    public function items(){
        return $this->hasMany('App\Item');
    }
    
}
