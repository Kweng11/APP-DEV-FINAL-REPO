<?php

namespace App\Models;

use CodeIgniter\Model;

class FarmModel extends Model
{
    protected $table = 'your_table_name';

    public function getFarmersData()
    {
        return $this->db->table($this->table)->where('your_condition')->get()->getResultArray();
    }

    // Add similar methods for other data
}