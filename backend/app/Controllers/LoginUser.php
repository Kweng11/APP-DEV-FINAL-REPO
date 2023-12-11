<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    use ResponseTrait;
    public $registermodel;
    public $session;
    public function __construct()
    {
        helper(['form']);  // Load the form helper here
        $this->registermodel = new UserModel();
        $this->session = \Config\Services::session();
    }
    
   
    public function LGULogin()
    {
       if (!$this->session->get('isLoggedIn')) {
            // $prompt['success'] = $this->session->getFlashdata('registered');
            // $prompt['fail'] = $this->session->getFlashdata('fail');
            $prompt = [
                'success'=> $this->session->getFlashdata('registered'),
                'fail' => $this->session->getFlashdata('fail'),
            ];
            return $this->respondCreated($prompt);
        }
    }

    public function LGURegister()
    {

        $userModel = new UserModel();
        $user = $userModel->where('email', $this->request->getVar('email'))->first();
        if($user){
            $response = [
                'status' => 409,
                'error' => null,
                'fail' => 'Email already exists!',
            ];
            return $this->respondCreated($response);
        }
        
        $data = [
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getVar('role') == 'ADMINISTRATOR' ? "ADMIN" : ($this->request->getVar('role') == "CASHIER" ? "CASHIER" : "USER"),
        ];
        
        $userModel = new UserModel();
        $userModel->save($data);
        
        $response = [
            'status' => 201,
            'error' => null,
            'redirect' => '/login',
            'messages' => [
                'success' => 'User Registered',
            ],
        ];
        
        return $this->respondCreated($response);
    }

    public function loginauth()
    {
        $session = session();
        $registermodel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $registermodel->where('email', $email)->first();

        if( $data = password_verify($password, $data['password']));

            
                 {
                    $ses_data = [
                        'id' => $data['id'],
                        'email' => $data['email'],
                        'isLoggedIn' => TRUE,
                        'role' => $data['role'],
                    ];

                    $this->session->set($ses_data);

                    if ($data['role'] === 'user')
                    {
                        return redirect()->to('/StaffHome');
                    } else if ($data['role'] === 'admin') {
                        return redirect()->to('/admindashboard');
                    }
                  else 
                  {
                   $this->$session->setFlashdata('msg', 'Account was not verified.');
                    return redirect()->to('/LGULogin');
                }
            }

       
    }


    public function login()
    {
        session()->remove(['id', 'email', 'isLoggedIn', 'role']);
        helper(['form']);
        return view('LGULogin');
    }
    public function signupview()
    {
        helper('form');
        $data = [];
        return view('LGURegister', $data);
    }

    public function signups()
    {
        helper('form');
        $rules = [
            'email' => 'required|min_length[1]|max_length[100]|is_unique[users.email]',
            'password' => 'required|min_length[8]|max_length[100]',
        ];

        if ($this->validate($rules)) {
            $registermodel = new UserModel();
            $to = $this->request->getVar('email');

            $data = [
                'role' => $this->request->getVar('role'),
                'email' => $to,
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];

            $registermodel->save($data);

            return redirect()->to('/LGULogin');
        } else {
            $data['validation'] = $this->validator;
            return view('LGURegister', $data);
        }
        
    }
    
}