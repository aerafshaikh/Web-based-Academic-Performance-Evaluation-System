
<?php
  define('HOST','localhost');
  define('USER','root');
  define('PASS','');
  define('DB','apes');
  $con = mysqli_connect(HOST,USER,PASS,DB);
  if(mysqli_connect_errno())
{
		echo 'Failed to connect';
}

?>