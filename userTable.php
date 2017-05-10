<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1px">
		<?php 
		require "client.php";
	// $test = new Client();
	// $test -> setId(2);
	// var_dump($clients);
		for($i=0; $i <= count($clients); $i++) { 
			echo "<tr><td>".$clients[$i]->getId() . "</td><td>".$clients[$i]->getEmail() . "</td><td>". $clients[$i]->getCreatedAt() . "</td></tr>";
		}
		?>
	</table>
</body>
</html>