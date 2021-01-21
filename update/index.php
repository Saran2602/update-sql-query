<?php
$mysqli = new mysqli("localhost","root","","test");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
 $url  = explode("/",$_SERVER['REQUEST_URI']);
 $name = ($url[2]);
  $up = "UPDATE users SET user_name='$name' WHERE id=83";
  if(mysqli_query($mysqli,$up))
  {
    echo "successfull";
  } 
  else
  {
    echo " not  successfull" ;
  }
  

  $mydate = getdate(date("U"));
  echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
  
?>