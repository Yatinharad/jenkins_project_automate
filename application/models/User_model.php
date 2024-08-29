<?php
class User_Model extends CI_Model{
	public function __construct(){
        $this->load->database();
        
    }
    public function adduser($name,$phone,$email,$pass)
    {
      
        $sql = "insert into users(name,phone,email,pass) values(?,?,?,?)";
        return $this->db->query($sql, array($name,$phone,$email,$pass));
    }

    public function dologin($name,$pass){
        $sql = "select * from users where email = ? and pass = ?";
        $query=$this->db->query($sql, array($name,$pass));
        $row = $query->row();
        if (isset($row))
        {
            
            return true;
        }
        else
            return false;
    

    }



}
?>