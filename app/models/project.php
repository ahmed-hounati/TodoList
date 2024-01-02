<?php
class Project
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function deleteProject($id)
    {
        $this->db->query("DELETE FROM projects WHERE project_id = :id");
        $this->db->bind(':id', $id);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function updateProject($projectname, $finaldate, $id)
    {
        $this->db->query("UPDATE `projects` SET`project_name`= :projec_name, `final_date`=:final_date WHERE `project_id` = :id");
        $this->db->bind(':project_name', $projectname);
        $this->db->bind(':lastname', $finaldate);
        $this->db->bind(':id', $id);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function addProject($data)
    {
        $this->db->query("INSERT INTO projects (project_name, final_date, email) VALUES (:project_name, :final_date, :email)");
        $this->db->bind(':project_name', $data['project_name']);
        $this->db->bind(':final_date', $data['final_date']);
        $this->db->bind(':email', $data['email']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getProjects()
    {
        $userEmail = $_SESSION['email'];

        $this->db->query("SELECT projects.project_name, projects.start_date, projects.final_date, projects.email
        FROM projects
        INNER JOIN users ON projects.email = users.email
        WHERE users.email = :email
        ");

        $this->db->bind(':email', $userEmail);

        if ($this->db->execute()) {
            $projects = $this->db->fetchAll();
            return $projects;
        } else {
            return false;
        }
    }

    public function Update($table, $sql, $id)
    {
        $sql = "UPDATE $table SET $sql WHERE $id";
        $this->db->query($sql);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
}
