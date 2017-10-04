<?php
include_once 'includes/db.class.php';

session_start();
$db = new Db();

$UserId=$_SESSION["UserId"];
$rows = $db -> select_templates($UserId);
$response=array();



if($rows==-1)
{
   $response['code']=-1;
   echo json_encode($response);
   return;
}
if($rows==0)
{
   //not found
   $response['code']=1;
   echo json_encode($response);
   return;
}
$response['code']=0;
$response['files']=$rows;


echo json_encode($response);
?>
