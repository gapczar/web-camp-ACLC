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
		$passW=$_POST['pass'];
		$email=$_POST['email'];
		try{
			$pdo=new PDO('mysql:dbname=Hackaton;host=localhost',user='',password='');
		}
		catch(PDOException $ex){
			die('Error: Could not connect:'.$ex->getMessage);
		}
		$sql="INSERT INTO USERACCOUNTS (Username,Password,Email) VALUES($userN,$passW,$email)";
		$ret=$pdo->exec($sql);
		if($RET===true){
			echo"Registration success!";
		}
		
	}
	?>
</html>