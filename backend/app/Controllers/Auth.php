<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function login()
    {
        $session = session();
        $request = service('request');
        
        $validation = service('validation');

        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');

        $post = $request->getPost();

        if (!$validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $email =  $request->getPost('email');

        $userModel = new UsersModel();
        $user = $userModel->where('email', $email)->first();

        if (empty($user)) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        $userArr = is_array($user) ? $user : (method_exists($user, 'toArray') ? $user->toArray() : (array) $user);

        if (!password_verify($this->request->getPost('password'), $userArr['password'] ?? '')) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        $fullname = explode(' ',trim($userArr['fullname']));

        $userdata = ['id' => $userArr['id'] ?? null,
            'email' => $userArr['email'] ?? null,
            'first_name' => $fullname[0] ?? null,
            'last_name' => $fullname[1] ?? null,
            'type' => $userArr['type'] ?? 'client',
            'display_name' => $userArr['fullname'],];

        $session->set($userdata);

        $type = strtolower($userArr['type'] ?? 'client');

        if ($type === 'manager') {
            return redirect()->to('home');
        }

        if ($type === 'client') {
            return redirect()->to('home');
        }
    }

    public function logout() {
        session()->destroy();
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 3600, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);
        return redirect()->to('home');
    }

    public function signup() {
        $now = date('Y-m-d H:i:s');

        $session = session();
        $request = service('request');
        $validation = service('validation');

        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');

        $post = $request->getPost();

        if (!$validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

<<<<<<< HEAD
        

=======
>>>>>>> a97bb0532e84c23ed897c8d6254218520b4c292d
        $userModel = new UsersModel();

        // This should be based on data from database table
        // Make sure that required datas are specified while some should be expecting null so have catcher for it

        if (($post['password'] === $post['password_confirm'])){
            $session->setFlashdata('success', ['message' => 'Account Successfully Created']);
            
            $data = [
                'fullname' => $post['fullname'],
                'email' => $post['email'],
                'password' => password_hash($post['password'], PASSWORD_DEFAULT),
                'type' => 'client',
                'created_at' => $now,
                'updated_at' => $now,
            ];

            $inserted = $userModel->insert($data);

            if(!$inserted){
<<<<<<< HEAD
                return("Failed to create account");
=======
                $session->setFlashdata('error', ['message' => 'Unsuccessful account creation']);
                return redirect()->back();
>>>>>>> a97bb0532e84c23ed897c8d6254218520b4c292d
            }
            
            return redirect()->back();
        }

<<<<<<< HEAD
=======
        $session->setFlashdata('error', ['message' => 'Password and confirmation do not match']);
>>>>>>> a97bb0532e84c23ed897c8d6254218520b4c292d
        return redirect()->back();
    }
}
