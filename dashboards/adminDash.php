<?php
   include('../resources/session.php');
?>
<html">
   
   <head>
      <title>Welcome Admin</title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?> Admin</h1>
      <h2><a href = "../logout.php">Sign Out</a></h2>
   </body>
   
</html>