<html>
	<head>
		<link rel="stylesheet" type="text/css" href="mainstyle.css">
	</head>
	<body>
		
		<form action="" method="POST">
			<p class="inline">Seed: </p>
			<input type="text" name="seed"/><br>
			<input type="submit" name="submit"/>
		</form>
	</body>
</html>
<?php
	if (isset($_POST["submit"])) {
		session_start();
		$_SESSION["seed"] = $_POST["seed"];
		header("location:system.php");
	}
?>