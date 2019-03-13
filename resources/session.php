<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from users where UserName = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   if (empty($row['StudentId'])) {
      $id = $row['SupervisorId'];
   }else{
      $id = $row['StudentId'];
   }
   $userName = $row['Username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: index.html");
      die();
   }
?>