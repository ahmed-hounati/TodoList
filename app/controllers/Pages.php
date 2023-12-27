<?php

class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [];
        $this->view('pages/index', $data);
    }


    public function signup()
    {
        $this->view('pages/signup');
    }

    public function dashboard()
    {
        $this->view('pages/dashboard');
    }


}
