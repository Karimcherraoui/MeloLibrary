<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PieceMusical extends Model
{
    use HasFactory;
    protected $table = 'piece_musical';
    protected $fillable =
    ['titreMusic', 'artiste_id', 'image', 'band', 'writers', 'words', 'langue', 'duration', 'release_date', 'status', 'genre', 'music'];
    // protected $guarded = [];
    public function artiste()
    {
        return $this->belongsTo(artistes::class, 'artiste_id', 'id');
    }
}
