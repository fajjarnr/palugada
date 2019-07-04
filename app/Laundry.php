<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    protected $table = 'laundries';

    protected $fillable = ['image', 'nama_jasa', 'deskripsi', 'slogan', 'harga', 'alamat', 'notlp', 'email'];
}
