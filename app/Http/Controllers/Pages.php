<?php

namespace App\Http\Controllers;

use App\Models\PieceMusical;
use App\Models\artistes;
use App\Models\Bande;
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

        $user = auth()->user();
        $artistes = artistes::all();
        $bandes = Bande::all();
        $musics = PieceMusical::all();

        return view('home',['musics' => $musics, 'user' => $user , 'artistes'=>$artistes , 'bandes'=>$bandes]);
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

    public function listArtist(){
        return view('artistes.showArtist');
    }


    public function dashboardADmin(){
        return view('admin.dashboardAdmin');
    }

    public function bandsAdd(){
        return view('bands.createBand');
    }

    

    // public function createPiece(){

    //     $artistes = artistes::all();
    //     $bandes = Bande::all();
  
    //     return view('PieceMusical.test',['artistes' => $artistes , 'bandes'=>$bandes]);
    // }
    public function music(){

        $artistes = artistes::all();
        $bandes = Bande::all();
  
        return view('PieceMusical.AddPieceMusical',['artistes' => $artistes , 'bandes'=>$bandes]);
    }

    public function edit(PieceMusical $music)
    {
        $user = auth()->user();
        $artistes = artistes::all();
        $bandes = Bande::all();

                // dd($user);
        return view('PieceMusical.updateMusic', ['musics' => $music, 'user' => $user , 'artistes'=>$artistes , 'bandes'=>$bandes]);
    }



    
    
    
}
