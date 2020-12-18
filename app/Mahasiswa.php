<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nrp', 'nama', 'jenis_kelamin', 'prodi', 'email', 'alamat', 'avatar', 'user_id', 'hari', 'tanggal', 'kegiatan', 'keterangan'];

    //untuk saling terhubung dengan model: Logbook
    public function logbook()
    {
        return $this->belongsToMany(Logbook::class)->withPivot(['kegiatan']);
    }
}
