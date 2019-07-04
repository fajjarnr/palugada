<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Massage extends Model
{
    protected $table = 'massages';

    protected $fillable = ['image', 'nama_jasa', 'deskripsi', 'slogan', 'harga', 'alamat', 'notlp', 'email'];
}
