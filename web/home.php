<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/Style/style.css">
		<script src="/Scripts/jquery-1.9.1.min.js"></script>
		<script src="/Scripts/script.js"></script>
	</head>
	<body>
<?php
		if(!isset($_POST['btnSubmit']))
		{
?>
		<div id="blur">
			<div id="modal">
				<form action="" method="post">
					<label>Username: </label><input type="text" name="user"><br>
					<label>Password: </label><input type="password" mame="pass"><br>
					<input type="submit" name="btnSubmit" value="Login">
				</form>	
			</div>
		</div>
		<div class="container">
			<header>
				<section class="top-section">
					<p class="head">Mobile Apps 'R Us!</p>
					<div id="login">
						<button>Login</button>
					</div>
				</section>
				<nav class="clearfix">
					<ul>	
						<li><a href="home.php">Home</a></li>
						<li><a href="sign.php">Sign Up</a></li>
					</ul>
				</nav>
			</header>
			<div class="main clearfix">
				<section class="content">
					<div id="block"></div>
					<article>
						Lorem Ipsum is simply dummy text of theprinting and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</article>
					<article>
						Lorem Ipsum is simply dummy text of theprinting and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</article>
				</section>
				<aside class="side-bar">
					<div id="block1"></div>
					<article>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</article>
					<article>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</article>
				</aside>
			</div>
			<footer class="clearfix">
				<p>Copyright &copy 2013 ACLC</p>
			</footer>
		</div>
<?php
 }
 else
 {
 	$user=$_POST['user'];
			$pass=$_POST['pass'];
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			try{
				$pdo=new PDO('mysql:dbname=mysql;host=localhost','root','root');
				echo 'success';
			}
			catch(PDOException $ex){
				die('Error: Could not connect:'.$ex->getMessage());
			}
			$sql="SELECT*FROM UserAccounts Where Username=$user And Password=$pass";
			if($result=$pdo->query($sql)){
				while($row=$result->fetch()){
					echo "Log-in Success!";
					header('location:apps.html');
				}
			}
				
}
 
?>
	</body>
</html>