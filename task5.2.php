<?php
class base{
public $servername = "localhost";
public $username = "username";
public $password = "password";
public $conn;
public $sql;

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

public function select(){
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} 
else {
  echo "0 results";
}
}

public function insert(){
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

public function update(){
    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

   if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
   } 
   else {
       echo "Error updating record: " . mysqli_error($conn);
    }
}

public function delete(){
    $sql = "DELETE FROM MyGuests WHERE id=3";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } 
    else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}


}
?>