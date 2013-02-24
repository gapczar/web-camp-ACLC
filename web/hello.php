<html>
	<head>
		<title>
		</title>
	</head>
	<body>
<?php
	if(!isset($_POST['btnsubmit']))
	{
?>
	This should work!
	<form method="post" action="hello.php">
		<input type="submit" name="btnsubmit" value="submit">
	</form>
<?php
	}	
	else
	{
	echo "It's WORKING!";
	}
?>
	</body>
</html>