<?php

class Users extends Controller
{
    public function __construct()
    {
    }

    public function signup()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        } else {
            $data = [
                'first_name' => '',
                'last_name' => '',
                'email' => '',
                'pasword' => '',
                'first_name_err' => '',
                'last_name_err' => '',
                'email_err' => '',
                'pasword_err' => ''
            ];

            $this->view('users/signup', $data);
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        } else {
            $data = [
                'email' => '',
                'pasword' => '',
                'email_err' => '',
                'pasword_err' => ''
            ];

            $this->view('users/login', $data);
        }
    }
}
