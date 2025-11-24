<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function home()
    {
        return view('user/landing');
    }
    
    public function signin()
    {
        return view('user/login');
    }

    public function signup()
    {
        return view('user/signup');
    }

    public function moodboard()
    {
        return view('user/mood_board');
    }

    public function roadmap()
    {
        return view('user/roadmap');
    }
}
