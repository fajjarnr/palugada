<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeCleaner extends Model
{
    protected $table = 'home_cleaners';

    protected $fillable = ['image', 'nama_jasa', 'deskripsi', 'slogan', 'harga', 'alamat', 'notlp', 'email'];
}
