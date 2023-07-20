<?php

 Class Connection
{
    private $server="localhost";
    private $username="root";
    private $password="";
    private $db="users";
    
    protected function connect(){
        $this->server;
        $this->username;
        $this->password;
        $this->db;
        $conn=new mysqli($this->server,$this->username,$this->password,$this->db);
        return $conn;
    }
}


?>