<?php
class Projects extends Controller
{

    private $projectModel;
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->projectModel = $this->model('Project');
    }
    public function index()
    {
        $projects = $this->projectModel->getProjects();

        $data = [
            'projects' => $projects
        ];

        $this->view('projects/index', $data);
    }


    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'project_name' => trim($_POST['project_name']),
                'final_date' => trim($_POST['final_date']),
                'email' => $_SESSION['email'],
            ];

            if (!empty($data['project_name']) && !empty($data['final_date'])) {
                if ($this->projectModel->addProject($data)) {
                    redirect('projects');
                } else {
                    die('Something wrong');
                }
            } else {
                $this->view('projects/add', $data);
            }
        } else {
            $data = [
                'project_name' => '',
                'final_date' => '',
                'email' => $_SESSION['email'], // Ensure user_id is set
            ];

            $this->view('projects/add', $data);
        }
    }

}
