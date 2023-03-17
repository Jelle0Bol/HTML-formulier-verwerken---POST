<!DOCTYPE html>
<html>
<head>
	<title>Welkom</title>
</head>
<body>
	<?php
		if(isset($_POST['name']) && isset($_POST['email'])) {
			echo "<h1>De ingevulde gegevens zijn:</h1>";
			echo "<p>Naam: ".$_POST['name']."</p>";
			echo "<p>Emailadres: ".$_POST['email']."</p>";
		} else {
			echo "<h1>Geen gegevens ontvangen</h1>";
		}
	?>
</body>
</html>
