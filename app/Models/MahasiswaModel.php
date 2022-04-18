<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = "mahasiswa";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'nama', 'npm', 'universitas', 'lokasi_pkl', 'selesai', 'created_at'];
    protected $useTimestamps = true;
    protected $dateFormat = 'date';

    function cari($katakunci)
    {

        $builder = $this->table("mahasiswa");
        $arr_katakunci = explode("", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orlike('nama', $arr_katakunci[$x]);
            $builder->orlike('npm', $arr_katakunci[$x]);
            $builder->like('universitas', $arr_katakunci[$x]);
        }
        return $builder;
    }
}
