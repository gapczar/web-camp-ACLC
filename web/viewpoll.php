<?php
	try{
				$pdo=new PDO('mysql:dbname=Hackaton;host=localhost',user='',password='');
			}
			catch(PDOException $ex){
				die('Error: Could not connect:'.$ex->getMessage);
			}
?>
	<h1>Poll Results:</h1>

<?php


			$sql="SELECT*FROM Poll";
			if($result=$pdo->query($sql)){
				while($row=$result->fetch()){
					echo $row['app_name']." " ."$row['app_count']."<br>";
				}
			}
		}
?>