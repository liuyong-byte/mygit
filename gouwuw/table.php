<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
		
			
				$u=mysqli_query($conn,"select * from d");
				while($uu=mysqli_fetch_array($u)){
					echo "<tr><td>{$uu[0]}</td><td>{$uu[1]}</td><td>{$uu[2]}</td></tr>";
				}
				echo "正式用户:".mysqli_num_rows($u)."位";
			
		
		
		?>
	</body>
</html>
