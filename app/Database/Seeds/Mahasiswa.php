<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
        [   
            'npm'           => '2017051028',
            'nama'          => 'edo laksana',
            'alamat'        => 'jepang',
            'created_at'    =>  Time::now()
        ],
        [   
            'npm'           => '2017051048',
            'nama'          => 'kaneki',
            'alamat'        => 'tokyo',
            'created_at'    =>  Time::now()
        ],
        [   
            'npm'           => '2017051001',
            'nama'          => 'Ryouta',
            'alamat'        => 'Lampung',
            'created_at'    =>  Time::now()
        ],
            
        ];


        // Using Query Builder
        foreach ($data_mahasiswa as $data){
        $this->db->table('mahasiswa')->insert($data);
      }
    }
}
