<?php
   session_start();
   $id=$_POST['id'];
   $password=$_POST['password'];

   if($id== "admin" && $password=="123"){
      $_SESSION['auth']=true;
      $_SESSION['id']="Admin";
   }
  header("Location:index.php");
  ?>