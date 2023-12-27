<?php
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function deleteUser($id)
    {
        $this->db->query("DELETE FROM users WHERE user_id = :id");
        $this->db->bind(':id', $id);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function updateUser($firstname, $lastname,$email, $pasword, $id)
    {
        $this->db->query("UPDATE `users` SET`firs_tname`= :firs_tname, `last_name`= :last_name, `email`= :email, `pasword`=:pasword WHERE `uder_id` = :id");
        $this->db->bind(':first_name', $firstname);
        $this->db->bind(':last_name', $lastname);
        $this->db->bind(':email', $email);
        $this->db->bind(':pasword', $pasword);
        $this->db->bind(':id', $id);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function register($firstname, $lastname, $email, $pasword)
    {
        $this->db->query('INSERT INTO users(firs_tname, last_name, email, pasword) VALUES (:first_name, :last_name, :email, :pasword)');
        $this->db->bind(':first_name', $firstname);
        $this->db->bind(':last_name', $lastname);
        $this->db->bind(':email', $email);
        $this->db->bind(':pasword', $pasword);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function login($email, $pasword)
    {
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind(':email', $email);
        $row = $this->db->fetch();
        $hashed_pasword = $row->pasword;
        if (password_verify($pasword, $hashed_pasword)) {
            return true;
        } else {
            return false;
        }
    }
    public function getInfo($id)
    {
        $this->db->query("SELECT * FROM users WHERE user_id = :id");
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
