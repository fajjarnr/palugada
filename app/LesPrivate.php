<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LesPrivate extends Model
{
    protected $table = 'les_privates';

    protected $fillable = ['image', 'nama_jasa', 'deskripsi', 'slogan', 'harga', 'alamat', 'notlp', 'email'];
}
