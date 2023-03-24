<?php

namespace App\Http\Controllers;

use App\Models\PieceMusical;
use Illuminate\Http\Request;

class Pages extends Controller
{
    //

    public function signUp()
    {

        return view('signUp');
    }

    public function Login (){
        return view('Login');
    }

    public function create(){
        return view('artiste.create');
    }
    public function home(){
        return view('home');
    }

    public function ArtistView(){
        return view('artistes.create');
    }

    public function addPieceMusical(){
        return view('PieceMusical.AddPieceMusical');
    }
    public function addArtiste(){
        return view('PieceMusical.AddPieceMusical');
    }

    public function listUsers(){
        return view('admin.listUsers');
    }
}
