<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelfBeauty extends Model
{
    protected $table = 'self_beauties';

    protected $fillable = ['image', 'nama_jasa', 'deskripsi', 'slogan', 'harga', 'alamat', 'notlp', 'email'];
}
