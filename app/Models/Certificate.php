<?php

namespace Sivil\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $table = 'certificates';

    protected $fillable = [
        'kode_pt', 'nama_pt', 'kodeprodi', 'program_studi', 'nama_mahasiswa', 'nim', 'no_ijazah', 'tgl_lulus'
    ];

    protected $casts = [
        'tgl_lulus' => 'datetime:Y-m-d',
    ];
}
