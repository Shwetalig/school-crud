<?php

namespace App\Modules\Students\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'students';
    protected $allowedFields = ['name', 'email', 'phone'];
    protected $useTimestamps = true;
}
