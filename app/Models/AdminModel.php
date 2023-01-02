<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = "Admin";
    protected $primaryKey = 'AdminID';
    protected $allowedFields = ['Email', 'Password'];
    protected $validationRules = ['Email' => 'valid_email'];
    protected $validationMessages = [
        'Email' => [
            'valid_email' => 'Invalid Email!'
        ]
    ];
}

?>