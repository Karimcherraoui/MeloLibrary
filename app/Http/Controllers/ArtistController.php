<?php

namespace App\Http\Controllers;

use App\Models\artistes;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\UserController;

class ArtistController extends Controller
{

    // Function pour Afficher list des Artistes 
    public function index()
    {
        $artistes = artistes::all();
        
        return view('artistes.showArtist', ['artistes' => $artistes]);
    }

    // function pour form editing artiste

    public function edit(Artistes $artiste)
    {

        $user = auth()->user();
        return view('artistes.updateArtist', ['artiste' => $artiste, 'user' => $user]);
    }



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
        $artiste->date = $request->date;

        // Store the uploaded image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public', $filename);
            $artiste->image = $filename;
        }


        $artiste->save();

        return redirect('/artiste/list')->with('status', 'The Artiste Has been Created succefull');
    }



    public function update(Request $request, Artistes $artiste)
    {
        $artistForm = $request->validate([
            'name' => 'required',
            'pays' => 'required',
            'image' => '',
            'date' => 'required',

        ]);
        if ($request->hasFile('image')) {
            $artistForm['image'] = $request->file('image')->store('images', 'public');
        } else {
            $artistForm['image'] = $artiste->image;
        }

        $artiste->update($artistForm);

        return redirect('/artiste/list')->with('message', 'artiste updated successfully');
    }




    public function delete(artistes $artiste)
    {
        $artiste->delete();
        return redirect('/artiste/list')->with('message', 'artiste deleted');
    }
}
