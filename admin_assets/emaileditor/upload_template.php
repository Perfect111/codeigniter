<?php
include_once 'includes/db.class.php';
session_start();


$db = new Db();


$name = $_POST['name'];
$content =htmlentities($_POST['content']);
$Id=$_POST["id"];

$result = $db -> update( $name, $content  , $Id );

if ($result) {
  echo 'ok';
}else {
   echo 'error';
}


?>
