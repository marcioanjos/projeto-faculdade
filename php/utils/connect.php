<?php	
$hostName = '127.0.0.1';
$dataBase = 'hotfac';
$user = 'root';
$pass = '';

$conn = mysqli_connect($hostName,$user,$pass,$dataBase) or die(mysql_error()); 

// Validar conexão


if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>