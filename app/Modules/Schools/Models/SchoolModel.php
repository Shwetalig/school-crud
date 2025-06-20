<?php 

namespace App\Modules\Schools\Models;

use CodeIgniter\Model;

class SchoolModel extends Model
{
    protected $table = 'schools';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'school_name', 'contact_person', 'email', 'num_students', 'status'
    ];
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;

}
