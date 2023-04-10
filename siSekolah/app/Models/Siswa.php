<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Models\Kelas;

class Siswa extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'siswa';

    protected $fillable = [
        'nama_siswa',
        'kelas',
        'nomor_induk_siswa',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat_siswa',
        'agama_siswa',
        'rapor_mata_pelajaran'
    ];

    public function Kelas()
    {
        return $this->belongsTo(Kelas::class, 'nama_kelas', 'kelas');
    }
}
