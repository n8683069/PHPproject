<!doctype html>
<html>
<head><title>Pattern mining project</title></head>

<body>
<?php 
	echo "<p>Poplate lonng text field</p>\n\n";
	
	$host ="localhost";
	$user ="root";
	$password ="c53160";
	$dbname ="pattern_table";
	
	$cxn = mysqli_connect($host, $user, $password, $dbname)
		or die ("Connection failed".mysqli_error($cxn));
	
	$query = "SELECT * FROM pattern_table.patterns";
	$result = mysqli_query($cxn, $query)
		or die("Coudn't execute query. ".mysqli_error($cxn));
	
	while ($data = mysqli_fetch_array($result)) {
		echo '<p>' . $data['Id'] . ' \n ' . $data['Description'] . "</p>\n";
	}

	
	
	mysqli_close($cxn);
	echo "(Test done)";
?>

</body>

</html>