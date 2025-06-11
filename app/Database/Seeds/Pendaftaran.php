<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pendaftaran extends Seeder
{
    public function run()
    {
        $data = [
        [
            'nama' => 'Asri',
            'email' => 'asri@gmail.com',
            'no_telpon' => '08123',
            'jenis_kelamin' => 'Perempuan',
            'bahasa' => 'Indonesia, Inggris, Arab, Sunda, Jawa',
            'agama' => 'Islam',
            'tanggal_daftar' => '2025-04-20',
            'jam_daftar' => '07:00:00',
        ],
        [
            'nama' => 'Carlos Sainz',
            'email' => 'carlosganteng@gmail.com',
            'no_telpon' => '08124',
            'jenis_kelamin' => 'Pria',
            'bahasa' => 'Indonesia, Inggris, Spanyol',
            'agama' => 'Kristen',
            'tanggal_daftar' => '2025-04-21',
            'jam_daftar' => '08:00:00',
        ],
        [
            'nama' => 'Marc Marquez',
            'email' => 'marc@gmail.com',
            'no_telpon' => '08125',
            'jenis_kelamin' => 'Pria',
            'bahasa' => 'Indonesia, Inggris, Spanyol, Jawa, ',
            'agama' => 'Katolik',
            'tanggal_daftar' => '2025-04-22',
            'jam_daftar' => '09:00:00',
        ],
        //
    ];
    $this->db->table('pendaftaran')->insertBatch($data);
    }
}
