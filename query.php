<?php
    
  Class Query extends Connection
  {
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
    public function insertData($table,$condition_array)
    {
      if($condition_array!="")
      {
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
    public function deleteData($table,$condition_arr){
      if($condition_arr!=""){
        $sql="delete from $table where ";
        $c=count($condition_arr);
        $i=1;
        foreach($condition_arr as $key=>$val){
          if($i==$c){
            $sql.="$key='$val'";
            
          }
          else{
            $sql.="$key='$val' and ";
          }
          $i++;
        }
        $result=$this->connect()->query($sql);

      }
    }
  }
?>