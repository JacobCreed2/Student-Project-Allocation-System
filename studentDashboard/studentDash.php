<?php
   include('../resources/session.php');
?>
<html>
   
   <head>
      <title>Welcome Student</title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?> Student</h1>
      <h2><a href = "../logout.php">Sign Out</a></h2>
   </body>
   
</html>