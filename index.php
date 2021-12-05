<!DOCTYPE html>
<html>
<head>
	<title>Kaiwan HamaSa3i</title>
</head>
<body>
	<style type="text/css">
		
		form{
			font-size: 35px;
			text-align: center;
			margin: 25px;	
		}
		label{
			font-size: 35px;
			font-family: "Cooper";
			color: red;
		}
		.input{
			padding: 10px;
			font-size: 25px;
			border: 1px solid white;
			width: 200px;
			height: 30px;
			text-align: center;
		}
		
		.sub{
			padding: 10px;
			font-size: 25px;
			border: 1px solid white;
			background-color: red;
			width: 200px;
			height: 50px;
			text-align: center;
		}
		.result{
			font-size: 28px ;
			color: red;
			text-align: center;
		}
	</style>
	<form action="" method="get">
			<h1 style="color: red;">LOVE METER</h1>
			<label>Your Name : </label><input class="input" type="text" name="male" placeholder = "Name" required >
			&nbsp;&nbsp;&nbsp;
			<label>Partners Name : </label><input class="input" type="text" name="famale" placeholder = "Partner"required><br><br><br>
			<input class="sub" type="submit" name="sub" value="start"><br>
			<h6 class="result"></h6>
	</form>

	<?php

		if (isset($_GET['sub'])) {
			$male= $_GET['male'];
			$female= $_GET['famale'];
			$random= rand(10,100);

			$filename="data.txt";
			
			$old_data=file_get_contents($filename);
			$content =$_GET['male']." , ".$_GET['famale']."\n";
			$new_data=$old_data.$content;


			file_put_contents($filename, $new_data);

			echo "<h6 class='result'>".$male ."  and  ".$female."  is   %".$random."</h6>";
		}
	?>

</body>
</html>