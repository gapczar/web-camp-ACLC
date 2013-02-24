<?php
			if(!isset($_POST['btnSubmit'])){
			
		?>
<html> 
	<head> 
		
	</head> 
	<body> 
		
		<h1>Log-in Form</h1>
		
		<form method="post" action="login.php">
		
		<label> Username</label> <input type="text" name="user" size ="20">
		<br>	
		<label> Password</label> <input type="password" name="pass" size="20">
		<br>
		<input type="submit" name="btnSubmit">
		</form>
		<?php
		}else{
			$user=$_POST['user'];
			$Realuser="R".$user;
			$pass=$_POST['pass'];
			try{
				$pdo=new PDO('mysql:dbname=mysql;host=localhost','root','root');
				
			$sql="SELECT*FROM UserAccounts Where Username='$user' And Password='$pass'";
			if($result=$pdo->query($sql)){
				while($row=$result->fetch()){
					echo "Log-in Success!";
					header('location:apps.php');

				}
			}
			}
			catch(PDOException $ex){
				die('Error: Could not connect:'.$ex->getMessage);
			}
		}
		?>
			
		
	</body>
</html>
