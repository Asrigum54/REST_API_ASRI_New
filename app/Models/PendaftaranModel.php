<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pendaftaran';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\Pendaftaran';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama',
        'email',
        'jenis_kelamin',
        'bahasa',
        'agama',
        'tanggal_daftar',
        'jam_daftar',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nama' => 'required|min_length[5]|is_unique[pendaftaran.nama]',
        'email' => 'required|valid_email',
        'no_telpon' => 'required',
        'jenis_kelamin' => 'required',
        'bahasa' => 'required',
        'agama' => 'required',
        'tanggal_daftar' => 'required',
        'jam_daftar' => 'required',
    ];
    protected $validationMessages   = [
        'nama' => [
            'required' => 'silakan masukan nama',
            'min_length' => 'nama minimal 5 karakter',
            'is_unique' => 'nama sudah terdaftar silakan masukan nama lain',
        ],
        'email' => [
            'required' => 'silakan masukan email',
            'valid_email' => 'silahkan masukan email yang valid',
        ],
        'no_telpon' => [
            'required' => 'silahkan masukan no_telpon',
        ],
        'jenis_kelamin' => [
            'required' => 'silahkan masukan jenis_kelamin',
        ],
        'bahasa' => [
            'required' => 'silakan masukan bahasa',
        ],
        'agama' => [
            'required' => 'silakan masukan agama',
        ],
        'tanggal_daftar' => [
            'required' => 'silahkan masukan tanggal_daftar',
        ],
        'jam_daftar' => [
            'required' => 'silahkan masukan jam_daftar',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
