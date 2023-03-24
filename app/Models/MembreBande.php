<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembreBande extends Model
{
    use HasFactory;
    protected $table = 'membres_bandes';
    protected $fillable = ['name','bande_id'];

}
