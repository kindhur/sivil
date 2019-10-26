<?php

namespace Sivil\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $table = 'certificates';

    protected $fillable = [
        'nama_pt', 'jenjang', 'program_studi', 'nama_mahasiswa', 'nim', 'no_ijazah', 'tgl_lulus'
    ];
}
