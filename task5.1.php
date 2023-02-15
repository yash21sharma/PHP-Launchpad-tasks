<?php
interface connection{
    function connect($servername, $username, $password);
}

class base implements connection{
public static $servername = "localhost";
public static $username = "username";
public static $password = "password";
public static $conn;
public static $sql;

public static function connect($servername, $username, $password){
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
}
}
?>