<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;

class Login extends BaseController
{
    public function __construct()
    {
        $this->Admin = new AdminModel();
    }

    public function Index()
    {  
        $login = $this->request->getPost('login');

        if ($login)
        {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            if ($email == '' || $password == '')
            {
                $error = "Please enter email and password administrator!";
            }

            if (empty($error))
            {
                $adminData = $this->Admin->where(["Email" => $email])->first();

                // $adminData = $this->Admin->where("Email", $email)->first();

                if ($adminData['Password'] != md5($password))
                {
                    $error = "Password is incorrect!";
                }
            }

            if (empty($error))
            {
                $sessionData = 
                [
                    'adminID' => $adminData['AdminID'],
                    'email' => $adminData['Email'],
                    'password' => $adminData['Password']
                ];

                session()->set($sessionData);

                return redirect()->to('/Admin/Dashboard');
            }

            if ($error)
            {
                session()->setFlashData('email', $email);
                session()->setFlashData('error', $error);

                return redirect()->to('/Login');
            }
        }

        return view('Login/Index');
    }   
}