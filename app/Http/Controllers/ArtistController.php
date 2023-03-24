<?php

namespace App\Http\Controllers;

use App\Models\artistes;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    //
    public function createArtiste(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pays' => 'required',
            'image' => 'required',
            'date' => 'required',

        ]);
        // dd($request);
        $artiste = new artistes();
        $artiste->name = $request->name;
        $artiste->pays = $request->pays;
        $artiste->image = $request->image;
        $artiste->date = $request->date;

        $artiste->save();

        return redirect('/')->with('status', 'The Artiste Has been Created succefull');
    }

}
