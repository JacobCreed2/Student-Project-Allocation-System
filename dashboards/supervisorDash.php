<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome Supervisor</title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?> Supervisor</h1>
      <h2><a href = "../logout.php">Sign Out</a></h2>
   </body>
   
</html>