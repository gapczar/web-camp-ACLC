

<html>
	<head>
	<style type="text/css">	
		#main{

		}
		#body{}
	</style>	
	</head>
	<body>

	<?php
	if(!isset($_POST['btnSubmit'])){

		echo '<div id="top">

		</div>
		<div id="main">

			<form method="post" action="USERINFO.php">
			<label>Username: </label>
			<input type="text" size="50" name="userN">
			<br>
			<label>Password: </label>
			<input type="password" size="50" name="pass">
			<label>Email address</label>
			<input type="text" size="50" name="email">
			<br>
			<input type="submit" value="Register" name="btnSubmit">
			</form>
		</div>
	</body>';

	
	}
	else{
		$userN=$_POST['user'];
		$passW=$_POST['pass'];
		$email=$_POST['email'];
		try{
			$pdo=new PDO('mysql:dbname=mysql;host=localhost','root','root');
			echo "Connection success";
		}
		catch(PDOException $ex){
			die('Error: Could not connect:'.$ex->getMessage());
		}
		$sql="INSERT INTO UserAccounts(Username,Password,Email) VALUES($userN,$passW,$email)";
		$stmt = $pdo->prepare($sql);
				$ret=$stmt->execute();
		if($ret===true){
			echo "Registration success!";
		}
	}
	?>
</html>