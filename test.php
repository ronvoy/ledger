<?php
include("connection.php");
include("query.php");
$obj=new Query;
$condition_arr=array('description'=>'yusuf','expense'=>'1000');
//$result=$obj->getData();
//$result=$obj->deleteData('tb',$condition_arr);
$result=$obj->updateData('tb',$condition_arr,'id',7);

?>