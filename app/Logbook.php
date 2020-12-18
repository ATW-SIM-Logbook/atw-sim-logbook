<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    protected $table = 'logbook';
    protected $fillable = ['hari', 'tanggal', 'jenis_kegiatan', 'keterangan'];

    //untuk saling terhubung dengan model: Mahasiswa
    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class)->withPivot(['kegiatan']);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
