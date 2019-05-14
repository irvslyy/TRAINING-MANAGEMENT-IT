<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
    	'nama',
    	'email',
    	'alamat',
    	'paket',
    	'pembimbing',
    ];
}
