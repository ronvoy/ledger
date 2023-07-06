<?php
include("index1.php");
$obj=new query;
$condition_arr=array('description'=>'laptop','expense'=>'300','income'=>'0' ,'category'=>'goods');
//$result=$obj->getData();
$result=$obj->insertData('tb',$condition_arr);
echo"<pre>";
print_r($result);

?>