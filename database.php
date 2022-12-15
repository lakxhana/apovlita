<?php
define("DATABASE_HOST", "localhost:4306");
define ("DATABASE_USER", "root");
$conn = mysqli_connect(DATABASE_HOST, DATABASE_USER);

if (mysqli_connect_errno())
  {
	echo "Failed to connect to MYSQL:" . mysqli_connect_error();
  }
  
  mysqli_select_db ($conn, "apovlita") or die("Could not open products database");
  
   date_default_timezone_set ('Asia/Kuala_Lumpur');
?>