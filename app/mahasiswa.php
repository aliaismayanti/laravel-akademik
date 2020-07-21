<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table ='mahasiswa';

    protected $fillable = [
    	'nim',
    	'nama',
    	'alamat',
    	'jenis_kelamin',
    	'prodi',
    	'jurusan',
    	'kelas',
    	'angkatan'
    ];
}
