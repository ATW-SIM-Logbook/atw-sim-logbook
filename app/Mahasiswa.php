<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nrp', 'nama', 'jenis_kelamin', 'prodi', 'email', 'alamat', 'avatar', 'user_id', 'hari', 'tanggal', 'kegiatan', 'keterangan'];
}
