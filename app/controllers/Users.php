<?php

class Users extends Controller
{

    private $currentModel;

    public function __construct()
    {
        $this->currentModel = $this->model('User');
    }


    public function register()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'first_name' => trim($_POST['first_name']),
                'last_name' => trim($_POST['last_name']),
                'email' => trim($_POST['email']),
                'pasword' => trim($_POST['pasword']),
                'first_name_err' => '',
                'last_name_err' => '',
                'email_err' => '',
                'pasword_err' => '',
            ];

            // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Pleae enter email';
            } else {
                // Check email
                if ($this->currentModel->findUserEmail($data['email'])) {
                    $data['email_err'] = 'Email is already taken';
                }
            }

            // Validate Name
            if (empty($data['first_name'])) {
                $data['first_name_err'] = 'Pleae enter ur first name';
            }

            if (empty($data['last_name'])) {
                $data['last_name_err'] = 'Pleae enter ur last  name';
            }

            // Validate Password
            if (empty($data['pasword'])) {
                $data['pasword_err'] = 'Pleae enter password';
            } elseif (strlen($data['pasword']) < 6) {
                $data['pasword_err'] = 'Password must be at least 6 characters';
            }


            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['last_name_err']) && empty($data['first_name_err']) && empty($data['pasword_err'])) {
                // Validated
                //hach
                $data['pasword'] = password_hash($data['pasword'], PASSWORD_DEFAULT);

                if ($this->currentModel->register($data)) {
                    redirect('users/login');
                } else {
                    die('somthing wronng');
                }
            } else {
                // Load view with errors
                $this->view('users/register', $data);
            }
        } else {
            // Init data
            $data = [
                'first_name' => '',
                'last_name' => '',
                'email' => '',
                'pasword' => '',
                'first_name_err' => '',
                'last_name_err' => '',
                'email_err' => '',
                'pasword_err' => '',
            ];

            // Load view
            $this->view('users/register', $data);
        }
    }


    public function login()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'email' => trim($_POST['email']),
                'pasword' => trim($_POST['pasword']),
                'email_err' => '',
                'pasword_err' => '',
            ];

            // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Pleae enter email';
            }

            // Validate Password
            if (empty($data['pasword'])) {
                $data['pasword_err'] = 'Please enter password';
            }


            if ($this->currentModel->findUserEmail($data['email'])) {
            } else {
                $data['email_err'] = 'no user found';
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['pasword_err'])) {
                // Validated
                $loggedInUser = $this->currentModel->login($data['email'], $data['pasword']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['pasword_err'] = 'password incorrect';

                    $this->view('users/login', $data);
                }
            } else {
                // Load view with errors
                $this->view('users/login', $data);
            }
        } else {
            // Init data
            $data = [
                'email' => '',
                'pasword' => '',
                'email_err' => '',
                'pasword_err' => '',
            ];

            // Load view
            $this->view('users/login', $data);
        }
    }

    public function createUserSession($user)
    {
        $_SESSION['email'] = $user->email;
        redirect('projects');
    }

    public function logout()
    {
        unset($_SESSION['email']);
        session_destroy();
        redirect('users/login');
    }
}
