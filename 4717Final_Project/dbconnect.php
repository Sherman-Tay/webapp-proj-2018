<?php //dbconnect.
@$dbcnx = new mysqli('localhost','f35ee','f35ee','f35ee');

if ($dbcnx ->connect_error){
  echo "Database is not online";
  exit;
}
?>
