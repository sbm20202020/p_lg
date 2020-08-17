<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class IndexController extends Controller
{
        public function index()
    {
        // $produit=Produit::find(2)->first();
        $produits=Produit::with('items')->get();
        //  dd($produits);
        return view('index')->with('produits',$produits);
    }
}
