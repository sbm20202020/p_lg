<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'nom', 'description','prix', 'produit_id'
    ];

    public function produit(){
        return $this->belongsTo('App\Produit');
    }
}
