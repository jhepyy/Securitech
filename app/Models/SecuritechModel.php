<?php

namespace App\Models;

use CodeIgniter\Model;

class SecuritechModel extends Model
    {
         protected $table = 'user_students'; // Ensure this matches your table name
    protected $primaryKey = 'id'; // Ensure this matches your primary key

    protected $allowedFields = ['sn', 'picture', 'fname', 'mname', 'lname', 'course', 'year_section', 'sex'];
    // protected $useTimestamps = false;

    }
?>
