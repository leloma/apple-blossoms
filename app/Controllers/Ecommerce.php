<?php

namespace App\Controllers;

use App\Models\UserModel;

class Ecommerce extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('homepage');
        echo view('footer');

    }

    public function login()
    {
        
      helper(["form"]);
      $data=[];

      helper(["form"]);
      $data=[];

      if ($this->request->getMethod() == 'post') {
          //Let's do the validation here
          $rules = [
              'email' => 'required|valid_email',
              'password' => 'required|min_length[8]|max_length[255]|validateUser[email, password]',
            
          ];

          $errors = [
                'password' => [
                    'validateUser'=> 'Email or Password don\'t match',
                ]
          ];

          if(!$this->validate($rules, $errors)){
              $data['validation'] = $this->validator;
          }
          else {
              //store the user in our database
              $model = new UserModel();

              $user = $model->where('email', $this->request->getVar('email'))
                            ->first();

              $this->setUserSession($user);

              return redirect()->to('dashboard');
              echo view('dashboard', $data);
            // return redirect()->to(site_url());

          }

      }



      echo view('login',$data);

    }

    public function dashboard()
    {
        $data = [];

        echo view('dashboard', $data);
    }


    private function setUserSession($user){
        $data = [
            'user_id' => $user['user_id'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'email' => $user['email'],
            'isLoggedIn' => true,

        ];
        session()->set($data);
        return true;
    }

    public function register()
    {
    
      helper(["form", "url"]);
      $data=[];

      if ($this->request->getMethod() == 'post') {
          //Let's do the validation here
          $rules = [
              'first_name' => 'required',
              'last_name' => 'required',
              'email' => 'required|valid_email|is_unique[tbl_users.email]',
              'password' => 'required|min_length[8]|max_length[255]',
              'gender' => 'in_list[Male, Female]',
            
          ];

          if(!$this->validate($rules)){
              $data['validation'] = $this->validator;
          }
          else {
              //store the user in our database
              $model = new UserModel();

              $newData = [
                  'first_name' => $this->request->getVar('first_name'),
                  'last_name' => $this->request->getVar('last_name'),
                  'email' => $this->request->getVar('email'),
                  'gender' => $this->request->getVar('gender'),
                  'password' => $this->request->getVar('password'),
                  'role'=> '1',

              ];


              $model->insert($newData);
              $session = session();
              $session->setFlashdata('success', 'Successful Registration');
            //   return redirect()->to(view('login', $data));
            // return redirect()->to('url/ecommerce/public/login', $data);  
            echo view('login',$data);
            // $this->load->helper('url');
            // redirect('Ecommerce/login', 'refresh');
              die();

          }

      }
      echo view('register',$data);
        
    }

}
