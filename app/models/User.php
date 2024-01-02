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
    public function updateUser($firstname, $lastname, $email, $pasword, $id)
    {
        $this->db->query("UPDATE `users` SET`first_name`= :first_name, `last_name`= :last_name, `email`= :email, `pasword`=:pasword WHERE `uder_id` = :id");
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
    public function register($data)
    {
        $this->db->query('INSERT INTO users(first_name, last_name, email, pasword) VALUES (:first_name, :last_name, :email, :pasword)');
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':pasword', $data['pasword']);
        if ($this->db->execute())
            return true;
        else
            return false;
    }

    public function findUserEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE  email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->fetch();
        if ($this->db->rowCount() > 0)
            return true;
        else
            return false;
    }
    public function login($email, $pasword)
    {
        $this->db->query("SELECT  * FROM users WHERE email = :email");
        $this->db->bind(':email', $email);
        $row = $this->db->fetch();
        $hashed_pasword = $row->pasword;
        if (password_verify($pasword, $hashed_pasword)) {
            return $row;
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
