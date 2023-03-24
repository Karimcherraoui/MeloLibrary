<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bande extends Model
{
    use HasFactory;
    protected $table = 'bandes';

    protected $fillable = ['name','image','pays','creation_date'];

}
