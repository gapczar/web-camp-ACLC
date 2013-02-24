<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/Style/style.css">
		<script src="/Scripts/jquery-1.9.1.min.js"></script>
		<script src="/Scripts/script.js"></script>
	</head>
	<body>
	<?php
	if(!isset($_POST['btnSubmit'])){
	?>
		<div class="container">
			<header>
				<section class="top-section">
					<p class="head">Mobile Apps 'R Us!</p>
				</section>
				<nav class="clearfix">
					<ul>	
						<li><a href="home.php">Home</a></li>
					</ul>
				</nav>
			</header>
			<div class="main clearfix">
			<form method="POST" action="">
			<label>Username: </label>
			<input type="text" size="50" name="user">
			<br>
			<label>Password: </label>
			<input type="password" size="50" name="pass">
			<br>
			<label>Email address</label>
			<input type="text" size="50" name="email">
			<br>
			<input type="submit" value="Register" name="btnSubmit">
			</form>
		</div>
		<footer class="clearfix">
				<p>Copyright &copy 2013 ACLC</p>
			</footer>
		</div>
	</body>

	<?php
	}
	else{
		$userN=$_POST['user'];
		$passW=$_POST['pass'];
		$email=$_POST['email'];
		try{
			$conn=new PDO('mysql:dbname=mysql;host=localhost','root','root');
<<<<<<< HEAD
=======
			echo "Connection success";
>>>>>>> 2005489ffbb3a15d43fd0ab26afaa08feba96fdd
		
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="INSERT INTO UserAccounts(Username,Password,Email) VALUES('$userN','$passW','$email')";
			$stmt = $conn->prepare($sql);
			$ret=$stmt->execute();
			header('location: apps.php');
		}
		catch(PDOException $ex){
			die('Error: Could not connect:'.$ex->getMessage());
		}
	}
	?>
</html>