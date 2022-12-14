<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model
{
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useTimetamps     = true;
    protected $allowedFields      = ['npm', 'nama', 'alamat'];
    protected $dateformat       = 'datetime';
    protected $createdFields    = 'creater_at';
    protected $updatedFields    = 'updated_at';
}
