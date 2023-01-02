<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Config\Database;

class StudentModel extends Model
{
    protected $table            = 'Student';
    protected $primaryKey       = 'StudentID';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['Name', 'NIM', 'Program', 'Topic', 'Status', 'Supervisor', 'Date'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function __construct()
    {
        parent::__construct();

        // $this->db = db_connect();
        
        $this->database = \Config\Database::connect();
    }

    public function GetRows()
    {
        return $this->database->table($this->table)->countAll();
    }

    public function GetStudentData($id = true)
    {
        if ($id === true) 
        {
            return $this->findAll();
        } 
        else 
        {
            return $this->where([$this->primaryKey => $id])->first();
        }
    }

    public function SaveStudentData($data)
    {
        return $this->save($data);
    }

    public function DeleteStudentData($id)
    {
        $this->delete($id);
    }
}