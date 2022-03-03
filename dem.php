<!DOCTYPE html>
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
#but {
  transition-duration: 0.4s;
  background-color: #1E135E; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-top:50px;
  margin-left:540px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}



#emptable {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin-left: 200px;
            margin-top :70px;
            
}

#emptable td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#emptable tr:nth-child(even){background-color: #f2f2f2;}

#emptable tr:hover {background-color: #ddd;}

#emptable th {
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
<script >function exportData(){
    /* Get the HTML data using Element by Id */
    var table = document.getElementById("emptable");
 
    /* Declaring array variable */
    var rows =[];
 
      //iterate through rows of table
    for(var i=0,row; row = table.rows[i];i++){
        //rows would be accessed using the "row" variable assigned in the for loop
        //Get each cell value/column from the row
        column1 = row.cells[0].innerText;
        column2 = row.cells[1].innerText;
        column3 = row.cells[2].innerText;
      
 
    /* add a new records in the array */
        rows.push(
            [
                column1,
                column2,
                column3,
               
            ]
        );
 
        }
        csvContent = "data:text/csv;charset=utf-8,";
         /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
        rows.forEach(function(rowArray){
            row = rowArray.join(",");
            csvContent += row + "\r\n";
        });
 
        /* create a hidden <a> DOM node and set its download attribute */
        var encodedUri = encodeURI(csvContent);
        var link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "Salary.csv");
        document.body.appendChild(link);
         /* download the data file named "Stock_Price_Report.csv" */
        link.click();
}</script>
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

$sql = "SELECT * FROM workero";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table id=emptable><tr><th>Name</th><th>Account Number</th><th>Salary</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["wname"]. "</td><td>" . $row["accno"]. "</td><td>" . (($row["wsalary"]/30)*$row["cal"]). "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
 <button id=but onclick="exportData()">
            <span class="glyphicon glyphicon-download"></span>
            Download list</button>
</body>
</html>