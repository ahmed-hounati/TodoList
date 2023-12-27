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
    public function addProject($projectname, $finaldate){
        $this->db->query("INSERT INTO projects (project_name, start_date, final_date) VALUES (':project_name', NOW(), :final_date )");
        $this->db->bind(':project_name', $projectname);
        $this->db->bind(':final_date', $finaldate);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function getProjectInfo($id)
    {
        $this->db->query("SELECT * FROM projects WHERE project_id = :id");
        $this->db->bind(':id', $id);
        $row = $this->db->fetch();
        return $row;
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