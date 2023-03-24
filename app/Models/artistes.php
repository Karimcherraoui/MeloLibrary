<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artistes extends Model
{
    use HasFactory;
    protected $table ='artistes';
 protected $fillable = [
        'name',
        'pays',
        'date',
        'image',

    ];
}
