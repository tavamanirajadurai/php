<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="uname"><br><br>           
  Salary:<input type="number" name="usalary"><br><br>
  Account number:<input type="text" name="uaccno"><br><br>
  <input type="submit">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendence";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name =  $_REQUEST['uname'];
  $salary = $_REQUEST['usalary'];
  $acno =  $_REQUEST['uaccno'];
 
  
  $sql = "INSERT INTO add_worker  VALUES ('$name', 
      '$salary','$acno')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
</body>
</html>