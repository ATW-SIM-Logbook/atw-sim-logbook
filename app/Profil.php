<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'users';
    protected $fillable = ['email', 'name'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class)->withPivot(['status']);
    }
}
