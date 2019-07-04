<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entertaiment extends Model
{
    protected $table = 'entertaiments';

    protected $fillable = ['image', 'nama_jasa', 'deskripsi', 'slogan', 'harga', 'alamat', 'notlp', 'email'];
}
