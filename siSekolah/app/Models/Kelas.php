<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Models\Siswa;

class Kelas extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'kelas';

    protected $fillable = [
        'nama_kelas',
        'deskripsi_kelas',
        'tema_kelas',
        'moto_kelas',
        'fasilitas_kelas',
        'nama_wali_kelas'
    ];

    public function Siswa()
    {
        return $this->hasMany(Siswa::class, 'kelas', 'nama_kelas');
    }
}
