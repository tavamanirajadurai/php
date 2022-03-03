<html>
<head>
<style>

.topnav {
  margin-top:20px;
  overflow: hidden;
  background-color: #1E135E;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

a:hover 
{
  color: Blue;
  border-bottom: 3px solid #38F5B1;
}
.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 14px 18px;
  text-decoration: none;
  font-size: 17px;

  
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin-left: 200px;
            margin-top :70px;
            
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #1E135E;
  color: white;
}
body{
  background-color: #FFFFFF;
}

</style>

</head>

<body>
<div class="topnav">
  <a href="dem.php">Total Salary</a>
  <a href="addat.html">Attendance</a>
  <a href="add.html">Add worker</a>
  <a href="table.php">Total Attendance</a>
  <a href="ts.php">Worker's detail</a>
</div>

<div style="padding-left:16px">
</div>
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

$sql = "SELECT * FROM attendence";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table id=customers><tr><th>Date</th><th>01</th><th>02</th><th>03</th><th>04</th><th>05</th><th>06</th><th>07</th><th>08</th><th>09</th><th>10</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["date"]."</td><td>".$row["01"]."</td><td>".$row["02"]."</td><td> ".$row["03"]."</td><td> ".$row["04"]."</td><td> ".$row["05"]."</td><td> ".$row["06"]."</td><td> ".$row["07"]." </td><td>".$row["08"]."</td><td> ".$row["09"]." </td><td>".$row["10"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</body>

</html>
