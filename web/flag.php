<?php
	//check if the voter has voted already
	try{
		$pdo=new PDO('mysql:dbname=Hackaton;host=localhost',user='root',password='root');
	}
	catch(PDOException $ex){
		die('Error: Could not connect:'.$ex->getMessage);
	}
	$sql="SELECT*FROM UserAccounts Where Username=$user And Password=$pass";
	if($result=$pdo->query($sql)){
		while($row=$result->fetch()){
			if($row['flag']>0){
				die('User cannot vote anymore!');
				header('location:index.html');
			}
			else{
				$flag=1;
				$sql="INSERT INTO USERACCOUNTS (hasVoted) VALUES($flag)";
				$ret=$pdo->exec($sql);
				if($RET===true){
					echo"You have voted successfully";
				}
			}
		}
	}
?>