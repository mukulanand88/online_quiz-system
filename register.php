<?php
include("class/user.php");
$register=new users;
extract($_POST);
$query= "INSERT INTO signup VALUES('','$uname','$email','$mob_no','$pwd')";

if($register->signup($query))
   {
      $register->url("index.php?run=success");
   }

?>