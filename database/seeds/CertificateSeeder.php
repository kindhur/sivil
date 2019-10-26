<?php

use Illuminate\Database\Seeder;
use Sivil\Models\Certificate;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cert = [
            [
                'kode_pt' => '073075',
                'nama_pt' => 'Sekolah Tinggi Ilmu Ekonomi IBMT',
                'kodeprodi' => '61201',
                'program_studi' => 'S1 Manajemen',
                'nama_mahasiswa' => 'Fandy Biantoro',
                'nim' => '152111013',
                'no_ijazah' => '06406/AA-IBMT/2018',
                'tgl_lulus' => '2019-10-26'
            ],
            [
                'kode_pt' => '073075',
                'nama_pt' => 'Sekolah Tinggi Ilmu Ekonomi IBMT',
                'kodeprodi' => '61101',
                'program_studi' => 'S2 Manajemen',
                'nama_mahasiswa' => 'Handy Aribowo',
                'nim' => '15152009',
                'no_ijazah' => '05412/AA-IBMT/2018',
                'tgl_lulus' => '2019-10-26'
            ],
        ];

        foreach ($cert as $key => $certificate) {
            Certificate::create($certificate);
        }
    }
}
