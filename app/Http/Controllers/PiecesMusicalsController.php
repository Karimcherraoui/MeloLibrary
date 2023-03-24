<?php

namespace App\Http\Controllers;

use App\Models\PieceMusical;
use Illuminate\Http\Request;

class PiecesMusicalsController extends Controller
{
    //

    public function createPiece(Request $request)
    {
        $request->validate([
            'titreMusic' => 'required',
            'pays' => 'required',
            'image' => 'required',
            'date' => 'required',

        ]);
        // dd($request);
        $artiste = new PieceMusical();
        $artiste->name = $request->name;
        $artiste->pays = $request->pays;
        $artiste->image = $request->image;
        $artiste->date = $request->date;

        $artiste->save();

        return redirect('/')->with('status', 'Your Account Has been Created succefull');
    }
}
