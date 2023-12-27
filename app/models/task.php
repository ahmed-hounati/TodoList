<?php
class Task
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function deleteTask($id)
    {
        $this->db->query("DELETE FROM tasks WHERE task_id = :id");
        $this->db->bind(':id', $id);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function updatetask($taskname, $taskdisc, $id)
    {
        $this->db->query("UPDATE `tasks` SET`task_name`= :task_name, `task_disc`=:task_disc WHERE `task_id` = :id");
        $this->db->bind(':task_name', $taskname);
        $this->db->bind(':task_disc', $taskdisc);
        $this->db->bind(':id', $id);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function getTaskInfo($id)
    {
        $this->db->query("SELECT * FROM tasks WHERE task_id = :id");
        $this->db->bind(':id', $id);
        $row = $this->db->fetch();
        return $row;
    }
    public function addTask($taskname, $taskdisc){
        $this->db->query("INSERT INTO tasks (task_name, task_disc, task_date) VALUES (':task_name', `task_disc`, NOW())");
        $this->db->bind(':task_name', $taskname);
        $this->db->bind(':task_disc', $taskdisc);
        if ($this->db->execute())
            return true;
        else
            return false;
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
