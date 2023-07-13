<?php
include("connection.php");
include("query.php");
$obj=new Query;
$condition_arr=array('id'=>1);
//$result=$obj->getData();
$result=$obj->deleteData('tb',$condition_arr);

?>