<!DOCTYPE html>
<html>
<head>
	<title>Test Question 1</title>
</head>
<body>

	<form action="TestQ1.php" method="POST">
		Number of servers : <input type="number" name="no_servers"><br>
		Server load every minute : <input type="text" name="server_load"><br>
		<button type="submit" name="submit">Submit</button>
	</form>

	<?php

	if(isset($_POST["submit"]))
	{
		$num_of_servers=$_POST["no_servers"];
		$server_load=explode(" ", $_POST["server_load"]);

		$sum = array_sum($server_load);
		if ($sum/5 < 50)
		{
			print "Number of servers : ".$num_of_servers/2;
		}
		else
		{
			print "Number of servers : ".(($num_of_servers*2)+1);
		}

	}
	?>

</body>
</html>
