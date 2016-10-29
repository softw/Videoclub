<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CatalogController extends Controller
{



    public function getIndex()
    {
        return view('catalog.index',['arrayPeliculas' => $this->arrayPeliculas]);
    }

    public function getShow($id)
    {
        $pelicula = $this->arrayPeliculas[$id];
        return view('catalog.show',['pelicula'=>$pelicula]);
    }

    public function getEdit($id)
    {
        return view('catalog.edit',['id'=>$id]);
    }

    public function getCreate()
    {
        return view('catalog.create');
    }
}
