<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bande;
use App\Models\MembreBande;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\UserController;



class BandeController extends Controller
{
    //

    public function index()
    {
        $bands = bande::all();
        // $Members =  MembreBande::where('id', $bands->id);
        return view('bands.showBand', ['bands' => $bands]);
    }

    public function edit(Bande $band)
    {
        $user = auth()->user();
        // dd($user);
        return view('bands.updateBand', ['bands' => $band, 'user' => $user]);
    }


    public function createBand(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'pays' => 'required',
            'image' => 'required',
            'creation_date' => 'required',

        ]);
        // dd($request);
        $band = new bande();
        $band->name = $request->name;
        $band->pays = $request->pays;
        $band->image = $request->image;
        $band->creation_date = $request->creation_date;

        // Store the uploaded image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public', $filename);
            $band->image = $filename;
        }

        $band->save();
        $id = Bande::latest()->first()->id;


        foreach ($request->members as $member) {
            $Member = new MembreBande();
            $Member->name = $member;
            $Member->bande_id = $id;
            $Member->save();
        }


        return redirect('/band/list')->with('status', 'The Band Has been Created succefull');
    }

    public function update(Request $request, Bande $band)

    {

        dd($request->band);

        $bandForm = $request->validate([
            'name' => 'required',
            'pays' => 'required',
            'image' => '',
            'creation_date' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $bandForm['image'] = $request->file('image')->store('images', 'public');
        } else {
            $bandForm['image'] = $band->image;
        }

        $band->update($bandForm);


        foreach ($request->members as $key => $member_id) {
            dd($request->members);
            $data = ['name' => $request->members[$key], 'updated_at' => now()];
            MembreBande::where('id', $member_id)->update($data);
        }

        return redirect('/band/list')->with('message', 'Band updated successfully');
    }


    public function delete(bande $band)
    {
        $band->delete();

        return redirect('/band/list')->with('message', 'band deleted');
    }
}
