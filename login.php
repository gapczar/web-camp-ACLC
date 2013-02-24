
<html> 
	<head> 
		
	</head> 
	<body> 
		<h1>Log-in Form</h1>
		<?php
			if(!isset($_POST['btnSubmit'])){
				
			
		?>
		<label> Username</label> <input type="text" name="user" size ="20">
		<br>	
		<label> Password</label> <input type="password" name="pass" size="20">
		<br>
		<input type="submit" name="btnSubmit">
		<?php
		}else{
			$user=$_POST['user'];
			$pass="$_POST['pass']"
			try{
				$pdo=new PDO('mysql:dbname=Hackaton;host=localhost',user='',password='');
			}
			catch(PDOException $ex){
				die('Error: Could not connect:'.$ex->getMessage);
			}
			
		}
		?>
	</body
</html>