<?php

namespace App\Models;

use CodeIgniter\Model;


class DataModel extends Model
{
    protected $table      = 'tb_data';
    protected $allowedFields = ['value'];

    // public function simpan($value)
    // {
    //     $data = [
    //         "value"   => $value,
    //     ];

    //     $insert = $this->insert($data);
    // }
}
