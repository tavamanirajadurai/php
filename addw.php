<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "attendence");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$worker_name = $_REQUEST['Workername'];
		$salary = $_REQUEST['Salary'];
		$accno = $_REQUEST['Accno'];
		$r="worker registered....!";
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO workero VALUES ('$worker_name',
			'$salary','$accno',0,11)";
		
		if(mysqli_query($conn, $sql)){
			
			header("Location: http://localhost/backend/ts.php");
          
        exit;	
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
