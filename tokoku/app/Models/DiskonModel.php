<?php

namespace App\Models;

use CodeIgniter\Model;

class DiskonModel extends Model
{
    protected $table = 'master_diskon';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id_barang', 'diskon', 'tanggal_mulai', 'tanggal_berakhir'
    ];
    protected $returnType = 'object';
}
