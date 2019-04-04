<?php
$sqlFileToExecute = 'sqlscript.sql';
$hostname = 'db.hostname.net';
$db_user = 'dbuser';
$db_password = 'dbpassword';
$link = mysql_connect($hostname, $db_user, $db_password);
if (!$link) {
  die ("MySQL Connection error");
}

$database_name = 'databasename';
mysql_select_db($database_name, $link) or die ("Wrong MySQL Database");

// read the sql file
$f = fopen($sqlFileToExecute,"r+");
$sqlFile = fread($f, filesize($sqlFileToExecute));
$sqlArray = explode(';',$sqlFile);
foreach ($sqlArray as $stmt) {
  if (strlen($stmt)>3 && substr(ltrim($stmt),0,2)!='/*') {
    $result = mysql_query($stmt);
    if (!$result) {
      $sqlErrorCode = mysql_errno();
      $sqlErrorText = mysql_error();
      $sqlStmt = $stmt;
      break;
    }
  }
}
if ($sqlErrorCode == 0) {
  echo "Script is executed succesfully!";
} else {
  echo "An error occured during installation!<br/>";
  echo "Error code: $sqlErrorCode<br/>";
  echo "Error text: $sqlErrorText<br/>";
  echo "Statement:<br/> $sqlStmt<br/>";
}

?>