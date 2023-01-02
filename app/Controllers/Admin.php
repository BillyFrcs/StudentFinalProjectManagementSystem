<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Controller;
use App\Models\StudentModel;

class Admin extends BaseController
{
    public static $instance = null;

    public function __construct()
    {
        $this->Student = new StudentModel();
    }

    public function Index()
    {
        $data['StudentData'] = $this->Student->GetStudentData();

        return view('Admin/Dashboard', $data);
    }

    public function Save()
    {
        $studentName = $this->request->getVar('name');
        $studentNIM = $this->request->getVar('nim');
        $studentProgram = $this->request->getVar('program');
        $studentTopic = $this->request->getVar('topic');
        $studentStatus = $this->request->getVar('status');
        $supervisor = $this->request->getVar('supervisor');
        $date = $this->request->getVar('date');

        $data = [
            'Name' => $studentName,
            'NIM' => $studentNIM,
            'Program' => $studentProgram,
            'Topic' => $studentTopic,
            'Status' => $studentStatus,
            'Supervisor' => $supervisor,
            'Date' => $date
        ];

        $save = $this->Student->SaveStudentData($data);

        if ($save)
        {
            return redirect()->to('/Admin/Dashboard');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function Update()
    {
        $studentID = $this->request->getVar('studentID');
        $studentName = $this->request->getVar('name');
        $studentNIM = $this->request->getVar('nim');
        $studentProgram = $this->request->getVar('program');
        $studentTopic = $this->request->getVar('topic');
        $studentStatus = $this->request->getVar('status');
        $supervisor = $this->request->getVar('supervisor');
        $date = $this->request->getVar('date');

        $data = [
            'StudentID' => $studentID,
            'Name' => $studentName,
            'NIM' => $studentNIM,
            'Program' => $studentProgram,
            'Topic' => $studentTopic,
            'Status' => $studentStatus,
            'Supervisor' => $supervisor,
            'Date' => $date
        ];

        $update = $this->Student->SaveStudentData($data);

        if ($update)
        {
            return redirect()->to('/Admin/Dashboard');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function Forms()
    {
        return view('Admin/Forms');
    }

    public function Edit($id)
    {
        $data['StudentData'] = $this->Student->GetStudentData($id);
        
        return View('Admin/Update', $data);
    }

    public function Delete($id)
    {
        $this->Student->DeleteStudentData($id);

        return redirect()->to('/Admin/Dashboard');
    }

    public function Logout()
    {
        session()->destroy();

        return redirect()->to('/Login');
    }

    public static function Instance()
    {
        if (self::$instance === null)
        {
            self::$instance = new Admin();
        }

        return self::$instance;
    }

    public function TotalStudent()
    {
        echo $this->Student->GetRows();
    }
}
