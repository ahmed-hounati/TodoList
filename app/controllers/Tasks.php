<?php

class Tasks extends Controller
{
    private $taskModel;

    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->taskModel = $this->model('Task');
    }

    public function index()
    {
        $data = [];

        $this->view('tasks/tasks', $data);
    }
}
