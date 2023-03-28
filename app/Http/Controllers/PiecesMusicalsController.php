<?php

namespace App\Http\Controllers;


use App\Models\Like;
use App\Models\Bande;
use App\Models\Users;
use App\Models\Artistes;
use App\Models\PieceMusical;


use Illuminate\Http\Request;
use wapmorgan\Mp3Info\Mp3Info;
use App\Models\likePieceMusical;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PiecesMusicalsController extends Controller
{
    //

    public function index()
    {
        $musics = PieceMusical::all();


        return view('PieceMusical.showMusic', ['musics' => $musics]);
    }

    public function edit(PieceMusical $music)
    {
        $user = auth()->user();
        $artistes = artistes::all();
        // dd($user);
        return view('PieceMusical.updateMusic', ['musics' => $music, 'user' => $user]);
    }

    public function createPiece(Request $request)
    {
        $musicForm = $request->validate([
            'titreMusic' => 'required',
            'type' => 'required|in:artist,band',
            'artiste_id' => 'required_if:type,artist',
            // 'band_id' => '',
            'image' => 'required',
            'music' => 'required',
            'genre' => 'required',
            // 'status'=> '',
            'words' => 'required',
            'writers' => 'required',
            'langue' => 'required',
            // 'duration' => 'required',
            'release_date' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $musicForm['image'] = $request->file('image')->store('musical_piece_image', 'public');
        }
        if ($request->hasFile('music')) {

            $audio = new Mp3Info($request->file('music'), true);
            // $m = intval($audio->duration / 120);
            // $s = intval($audio->duration % 120);
            // $musicForm['duration'] = $m . ':' . $s;

            $m = intval($audio->duration / 120);
            $s = intval($audio->duration % 120);
            $duration = number_format($m + ($s / 60), 2);
            $musicForm['duration'] = $duration;
            $musicForm['music'] = $request->file('music')->store('music', 'public');
        }
        // dd($musicForm);
        if ($musicForm['type'] == 'artist') {
            $musicForm['artiste_id'] = $request->artiste_id;
        } else {
            $musicForm['band_id'] = $request->band_id;
        }

        PieceMusical::create($musicForm);

        return redirect('/music/list')->with('message', 'Musical piece created successfully');
    }


    public function update(Request $request, PieceMusical $music)
    {

        // dd($music);
        $musicForm = $request->validate([
            'titreMusic' => 'required',
            'type' => '',
            'artiste_id' => '',
            'band_id' => '',
            'image' => '',
            'music' => '',
            'genre' => 'required',
            // 'status'=> '',
            'words' => 'required',
            'writers' => 'required',
            'langue' => '',
            // 'duration' => 'required',
            'release_date' => 'required',

        ]);
        if ($request->hasFile('image')) {
            $musicForm['image'] = $request->file('image')->store('images', 'public');
        } else {
            $musicForm['image'] = $music->image;
        }
        if ($request->hasFile('music')) {
            $musicForm['music'] = $request->file('music')->store('music', 'public');
        } else {
            $musicForm['music'] = Storage::url($music->music);
        }


        $music->update($musicForm);

        return redirect('/music/list')->with('message', 'music updated successfully');
    }


    public function delete(PieceMusical $music)
    {
        $music->delete();
        return redirect('/music/list')->with('message', 'music deleted');
    }

    public function like(PieceMusical $music){
            $form = [
                'piece_musical_id' =>  $music->id,
                'client_id' => auth()->id(),
            ];
            Like::create($form);
           return back()->with('message','liked');
    }

     public function unlike(pieceMusical $music)
    {
        like::where('piece_musical_id', $music->id)->where("client_id", Auth::id())->delete();
        return back()->with('message', 'unliked');
    }


    public function likedMusic(){
        $user = Auth::user();
        $likedMusic = PieceMusical::whereHas('likes', function($query) use ($user) {
            $query->where('client_id', $user->id);
        })->get();

        return view('PieceMusical.LikedSongs', ['musics' => $likedMusic]);


    }
    
}
