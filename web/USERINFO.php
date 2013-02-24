

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
	?>
		<div id="top">

		</div>
		<div id="main">

			<form method="POST" action="USERINFO.php">
			<label>Username: </label>
			<input type="text" size="50" name="user">
			<br>
			<label>Password: </label>
			<input type="password" size="50" name="pass">
			<label>Email address</label>
			<input type="text" size="50" name="email">
			<br>
			<input type="submit" value="Register" name="btnSubmit">
			</form>
		</div>
	</body>

	<?php
	}
	else{
		$userN=$_POST['user'];
		$passW=$_POST['pass'];
		$email=$_POST['email'];
		try{
			$conn=new PDO('mysql:dbname=Hackaton;host=localhost','root','root');
			echo "Connection success";
		
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="INSERT INTO UserAccounts(Username,Password,Email) VALUES('$userN','$passW','$email')";
			$stmt = $conn->prepare($sql);
			$ret=$stmt->execute();
			if($ret==true){
				echo "Registration success!";
			}
		}
		catch(PDOException $ex){
			die('Error: Could not connect:'.$ex->getMessage());
		}
	}
	?>
</html>