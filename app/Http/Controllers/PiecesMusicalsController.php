<?php

namespace App\Http\Controllers;

use App\Models\PieceMusical;
use Illuminate\Http\Request;

class PiecesMusicalsController extends Controller
{
    //

    public function createPiece(Request $request)
    {
        $musicForm = $request->validate([
            'titreMusic' => 'required',
            // 'type' => 'required|in:artist,band',
            'artiste_id' => 'required_if:type,artist',
            'band_id' => 'required_if:type,band',
            'image' => 'required',
            'music' => 'required',
            'words' => 'required',
            'writers' => 'required',
            'langue' => 'required',
            'duration' => 'required',
            'release_date' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $musicForm['image'] = $request->file('image')->store('musical_piece_image', 'public');
        }
        if ($request->hasFile('music')) {
            $musicForm['music'] = $request->file('music')->store('music', 'public');
        }
        // dd($musicForm);
        if ($musicForm['type'] == 'artist') {
            $musicForm['artiste_id'] = $request->artiste_id;
        } else {
            $musicForm['band_id'] = $request->band_id;
        }

        pieceMusical::create($musicForm);
        
        return redirect('/admin/piecesMusicals')->with('message', 'Musical piece created successfully');
    }
}
