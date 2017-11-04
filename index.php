<!DOCTYPE html>
<html>
<head>
	<title>Welcome to DevOps on AWS!</title>
</head>
<body>
	<?php
		require 'Welcome.php';
		$welcome = new Welcome();
	?>
	<h1><?php echo $welcome->greet() ?></h1>
	<h2>Continuous Integration and Deployment</h2>
</body>
</html>