<?php
   include('../resources/session.php');
   include('../resources/styling.html');
?>
<html>
   
   <head>
      <title>Welcome Student</title>
   </head>
   
<?php include ('studentNavbar.php'); ?>

   <body>
      <h1>Welcome <?php echo $userName; ?> Student</h1>
      <h2><a href = "../logout.php">Sign Out</a></h2>
   </body>
   
</html>