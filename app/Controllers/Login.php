<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function auth(){
        $session = session();
        $model = new \App\Models\UserModel;

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $model->where('username', $username)->first();

        if($data){
            $pass = $data['password'];
            // $verify = password_verify($password, $pass);
            if($pass==$password){
                $ses_data = [
                    'username'     => $data['username'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('http://localhost:8080/Admin/Overview');
            } else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }

        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
       
    }
    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url());
    }
}
