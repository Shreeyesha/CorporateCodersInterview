<!DOCTYPE html>
<html>
<head>
	<title>TestQ2</title>
</head>
<body>
<form action="TestQ2.php" method="POST">
	Number of breads, vadas and samosas : <input type="text" name="ingre"><br>
	Price of Vadapava and Samosapav : <input type="text" name="price"><br>
	<button type="submit" name="submit">Submit</button>
</form>

<?php 
if(isset($_POST["submit"]))
	{
		$ingredients=explode(" ", $_POST["ingre"]);
		$price=explode(" ", $_POST["price"]);
		$bread=intdiv($ingredients[0], 2);
		$vadas=$ingredients[1];
		$samosas=$ingredients[2];
		$max_vadas=min($bread,$vadas);
		$max_samosas=min($bread,$samosas);
		$cost_vada=$price[0];
		$cost_samosa=$price[1];
		$max_profit=0;

		for($i=0;$i<=$max_vadas;$i++)
		{
			if(($bread-$i<=$max_samosas))
			{
				$sales=$i*$cost_vada+($bread-$i)*$cost_samosa;
			}
			else
			{
				$sales=$i*$cost_vada+$max_samosa*$cost_samosa;
			}
			$max_profit=max($max_profit,$sales);
		}
		print "Maximum profit possible: ".($max_profit);
	}
?> 	
</body>
</html>
