<?php
   include('../resources/session.php');
   include('../resources/styling.html');
?>
<html>
   
   <head>
      <title>Student Project Allocation System</title>
   </head>
   
<?php include ('adminNavbar.php'); ?>

   <body>
      <h1>Welcome <?php echo $login_session; ?> Admin</h1>
      <h2><a href = "../logout.php">Sign Out</a></h2>
   </body>
   
</html>