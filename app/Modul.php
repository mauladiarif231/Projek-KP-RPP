<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
        protected $table = "modul";
 
    protected $fillable = ['mapel','guru','angkatan','file'];
}
