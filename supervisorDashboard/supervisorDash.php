<?php
   include('../resources/session.php');
   include('../resources/styling.html');
?>
<html>
   
   <head>
      <title>Welcome Supervisor</title>
   </head>
<?php include ('supervisorNavbar.php'); ?>   
   <body>
      <h1>Welcome <?php echo $userName; echo $id; ?> Supervisor</h1>
      <h2><a href = "../logout.php">Sign Out</a></h2>
   </body>
   
</html>