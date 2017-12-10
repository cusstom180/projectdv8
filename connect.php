<?php

  DEFINE('DB_USERNAME', 'admin');
  DEFINE('DB_PASSWORD', 'admin');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'dv8');

  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }

  echo 'Connected successfully.';

$query = 'SELECT * FROM dv8.img WHERE id = 1';
$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result)) {
    $data = mysqli_fetch_assoc($result);
    var_dump($data);
} else {
    echo "No data found";
}

var_dump($result);

echo 'in navbar.php';

  $mysqli->close();


/*$user = 'root';
$password = 'root';
$db = 'inventory';
$host = '127.0.0.1';
$port = 8889;
$socket = 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock';

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host,
   $user, 
   $password, 
   $db,
   $port,
   $socket
);*/

//$servername = 'localhost';
//$username = 'admin';
//$password = 'admin';
//$database = 'dv8';
//
////include('sql.php');
//// Create connection
//$conn = mysqli_connect($servername, $username, $password, $database);
//
//// Check connection
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
//
//$query = 'SELECT * from dv8.img WHERE id = 1';
//$result = mysqli_query($conn, $query);
//
//var_dump($result);
//
//echo 'in navbar.php';
?>
	
	

