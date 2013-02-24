<?php
	if(!isset($_POST['btnSubmit'])){
?>

<html>
	<head>
			
	</head>
	<body>
		<form method="post" action="index.php">
		<label>Username: </label>
		<input type="text" size="50">
		<br>
		<label>Password: </label>
		<input type="password" size="50">
		<label>Email address</label>
		<input type="text" size="50">
		<br>
		<input type="submit" value="Register" name="btnSubmit">
	</body>
	<?php
	}else{
		$userN=$_POST['user'];
		$passW="$_POST['pass']"
		try{
			$pdo=new PDO('mysql:dbname=Hackaton;host=localhost',user='',password='');
		}
		catch(PDOException $ex){
			die('Error: Could not connect:'.$ex->getMessage);
		}
		$sql="SELECT*FROM UserAccounts Where Username=$user And Password=$pass";
		if($result=$pdo->query($sql)){
			while($row=$result->fetch()){
				echo "Log-in Success!";
				header('location');
			}
	}
	?>
</html>