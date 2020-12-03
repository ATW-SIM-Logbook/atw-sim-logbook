<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nrp', 'nama', 'jenis_kelamin', 'prodi', 'email', 'alamat', 'avatar', 'user_id'];
}
