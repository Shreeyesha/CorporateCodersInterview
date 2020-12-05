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

	

		if($cost_vada>$cost_samosa)
		{
			$sales=$max_vadas*$cost_vada;


			if(($bread-$max_vadas<=$max_samosas))
			{
				$sales=$sales+($bread-$max_vadas)*$cost_samosa;
			}
			else
			{
				$sales=$sales+$max_samosas*$cost_samosa;
			}
		}
		else
		{
			$sales=$max_samosas*$cost_samosa;


			if(($bread-$max_samosas<=$max_vadas))
			{
				$sales=$sales+($bread-$max_samosas)*$cost_vada;
			}
			else
			{
				$sales=$sales+$max_vadas*$cost_vada;
			}
		}


		print "Maximum profit possible: ".($sales);
	}
?> 	
</body>
</html>
