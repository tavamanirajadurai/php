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
		$date= $_REQUEST['date'];
		$a = $_REQUEST['01'];
		$b = $_REQUEST['02'];
		$c = $_REQUEST['03'];
        $d = $_REQUEST['04'];
        $e = $_REQUEST['05'];
        $f = $_REQUEST['06'];
        $g = $_REQUEST['07'];
        $h = $_REQUEST['08'];
        $l = $_REQUEST['09'];
        $i = $_REQUEST['10'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO attendence VALUES ('$date','$a','$b','$c','$d','$e','$f','$g','$h','$l','$i')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$worker_name\n $salary\n "
				. "$accno\n ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		if($a =="present")
		{
			$sqll = "UPDATE workero SET cal = cal+1	WHERE id = 1";
			mysqli_query($conn,$sqll);
		}
		if($b =="present")
		{
			$sqll = "UPDATE workero SET cal = cal+1	WHERE id = 2";
			mysqli_query($conn,$sqll);
		}
		if($c =="present")
		{
			$sqll = "UPDATE workero SET cal = cal+1	WHERE id = 3";
			mysqli_query($conn,$sqll);
		}
		if($d =="present")
		{
			$sqll = "UPDATE workero SET cal = cal+1	WHERE id = 4";
			mysqli_query($conn,$sqll);
		}
		if($e =="present")
		{
			$sqll = "UPDATE workero SET cal = cal+1	WHERE id = 5";
			mysqli_query($conn,$sqll);
		}
		if($f =="present")
		{
			$sqll = "UPDATE workero SET cal = cal+1	WHERE id = 6";
			mysqli_query($conn,$sqll);
		}
		if($g =="present")
		{
			$sqll = "UPDATE workero SET cal = cal+1	WHERE id = 7";
			mysqli_query($conn,$sqll);
		}
		if($h =="present")
		{
			$sqll = "UPDATE workero SET cal = cal+1	WHERE id = 8";
			mysqli_query($conn,$sqll);
		}
		if($l =="present")
		{
			$sqll = "UPDATE workero SET cal = cal+1	WHERE id = 9";
			mysqli_query($conn,$sqll);
		}
		if($i =="present")
		{
			$sqll = "UPDATE workero SET cal = cal+1	WHERE id = 10";
			mysqli_query($conn,$sqll);
		}
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
