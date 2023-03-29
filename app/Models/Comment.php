<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = ['pieceMusical_id','client_id','comment_body'];
    
    public function user(){
        return $this->belongsToMany(user::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
