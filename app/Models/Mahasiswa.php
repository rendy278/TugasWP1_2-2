<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nama', 'kelas', 'jurusan',
        'nilai_tugas', 'nilai_quiz', 'nilai_uts', 'nilai_uas', 'nilai_akhir',
    ];
    
}
