<?php

class database{
    private $server="localhost";
    private $username="root";
    private $password="";
    private $db="users";
    
    protected function connect(){
        $this->server;
        $this->username;
        $this->password;
        $this->db;
        $conn=new mysqli($this->server,$this->username,$this->passowrd,$this->db);
        return $conn;
    }
}
class query extends database{
    public function getData(){
        $sql="select * from  tb ";
        $result=$this->connect()->query($sql);
        if($result->num_rows>0){
            $arr=array();
          while($row=$result->fetch_assoc()){
            $arr[]=$row;
             
             
          }
          return $arr;
        }else{
             return 0; 
        }
    }
    public function insertData($table,$condition_array){
        if($condition_array!=""){
          foreach($condition_array as $key=>$value){
            $fieldArr[]=$key;
            $valueArr[]=$value;
          }
           $field=implode(",",$fieldArr);
           $value=implode("','",$valueArr);
           $value="'".$value."'";
           
         $sql="insert into $table($field) values($value) ";
         
          
          $result=$this->connect()->query($sql);
        }

       
      }
}

?>