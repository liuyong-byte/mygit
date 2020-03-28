<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
		
		if(!empty($_POST["subb"])){
		if(!empty($_GET["user"])){
			
			if(!empty($_POST["text1"])){
			$a=$_POST["text1"];
			$b=$_POST["text2"];
			$c=$_POST["text3"];
			$q1=mysqli_query($conn,"insert into fz values('".$a."','".$b."','".$c."')");
			if($q){
			echo "<script>alert('增加成功');</script>";
			}
			}		
			if(!empty($_POST["text21"])){
			$e=$_POST["text21"];
			$q2=mysqli_query($conn,"delete from fz where fztupian='".$e."'");
			if($q2){
			echo "<script>alert('删除成功');</script>";
			}
			}
			if(!empty($_POST["text22"])){
			$f=$_POST["text22"];	
			$q3=mysqli_query($conn,"select * from fz where fztupian='".$f."'");
			$q4=mysqli_fetch_array($q3);
			echo $q4[0];
			echo "<div><img src='fz/{$q4[0]}' width='100px' height='100px'/><span>{$q4[1]}</span><span>{$q4[2]}</span></div>";
			echo "<script>alert('查询成功');</script>";
			}
			if(!empty($_POST["text33"])){
				$a=$_POST["text33"];
				$d=mysqli_query($conn,"select fid from fzl where fname='{$a}'");
				$dd=mysqli_fetch_array($d);
				$d1=mysqli_query($conn,"select * from fz where fid='{$dd[0]}'");
				while($dd=mysqli_fetch_array($d1)){
					echo "<div><img src='fz/{$dd[0]}' width='100px' height='100px'/><span>{$dd[1]}</span><span>{$dd[2]}</span></div>";
					
				}
			}
			
		}
		else{
			echo "<script>var a=confirm('是否跳转登录');if(a==true){window.location.href='1.php';}</script>";
		}
		}
		
		?>
	</body>
</html>
