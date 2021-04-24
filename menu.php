<html>
	<head><title>
	</title></head>
	<body>
		<?php
		    $Tea=$_POST['Tea'];
			$Tea_cost=3;
			$Tea_q=0;
			for($i=1;$i<=$Tea;$i++)
			{
				Tea_q=Tea_q+Tea_cost;
			}
			$Coffee=$_POST['Coffee'];
			$Coffee_cost=3;
			$Coffee_q=0;
			for($i=1;$i<=$Coffee;$i++)
			{
				Coffee_q=Coffee_q+Coffee_cost;
			}
			$Bread_and_Butter=$_POST['Bread and Butter'];
			$Bread_and_Butter_cost=3;
			$Bread_and_Butter_q=0;
			for($i=1;$i<=$Bread_and_Butter;$i++)
			{
				Bread_and_Butter_q=Bread_and Butter_q+Bread_and_Butter_cost;
			}
			$Plain_Sandwich=$_POST['Plain Sandwich'];
			$Plain_Sandwich_cost=3;
			$Plain_Sandwich_q=0;
			for($i=1;$i<=$Plain_Sandwich;$i++)
			{
				Plain_Sandwich_q=Plain_Sandwich_q+Plain_Sandwich_cost;
			}
			$Veg_Sandwich=$_POST['Veg Sandwich'];
			$Veg_Sandwich_cost=3;
			$Veg_Sandwich_q=0;
			for($i=1;$i<=$Veg_Sandwich;$i++)
			{
				Veg_Sandwich_q=Veg_Sandwich_q+Veg_Sandwich_cost;
			}
			$total=$Tea_q + $Coffee +$Bread_and_Butter + $Plain_Sandwich + $Veg_Sandwich;
			echo"$Tea_q ordered";
			echo"$Coffee_q ordered";
			echo"$Bread_and_Butter_q ordered";
			echo"$Plain_Sandwich_q ordered";
			echo"$Veg_Sandwich_q ordered";
			echo"Total Cost is:- ".$total;
		?>
</body>
</html>
