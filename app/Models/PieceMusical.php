<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PieceMusical extends Model
{
    use HasFactory;
    protected $table = 'piece_musicals';
    protected $fillable = 
    ['titreMusic', 'artiste_id', 'image', 'band', 'writers', 'words', 'langue', 'duration', 'release_date','status','genre'];
}
