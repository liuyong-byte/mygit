<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="bootstrap.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="jquery-2.1.0.js"></script>
		<script type="text/javascript" src="bootstrap.js"></script>
		<style>
			div.row{
				background:linear-gradient(45deg,skyblue 10%,red 30%,skyblue 20%,transparent 30%,skyblue 10%);
				background-size:20px 20px;
				
				background-position:0px 80px;
				animation:rorate1 3s linear 1;
			}
			@-webkit-keyframes rorate1{
						0%{background: skyblue;}
							10%{background: salmon;}
							30%{background: slateblue;}
							50%{background: aqua;}
							70%{background: white;}
							100%{background: fuchsia;}
							
						}
			div.c{
				background:repeating-radial-gradient(circle,skyblue 10%,white 30%,skyblue 20%);
				background-size:30px 30px;
				animation:rorate 3s linear 1;
			}
			@-webkit-keyframes rorate{
						0%{background-position:0px 0px;transform:scale(0.3,0.3);}
							10%{background-position:150px 150px;transform:scale(0.4,0.4);}
							30%{background-position:200px 200px;transform:scale(0.5,0.5);}
							50%{background-position:150px 150px;transform:scale(0.6,0.6);}
							70%{background-position:100px 100px;transform:scale(0.7,0.7);}
							100%{background-position:0px 0px;transform:scale(1.0,1.0);}
							
						}
			
		</style>
	</head>
	<body>
		<div class="container bg-info" style="text-align:center;">
		<div class="row">
		<div class="col-lg-4 col-lg-push-4 c" style="height:400px">
		<table style="">
		<form action="3.php" method="post">
		<tr><td><label id="user">手机号码</label></td>
		<td><input type="text" id="user" name="user1" placeholder="请输手机号码" required="required" pattern="^1\d{10}"/></td></tr>
		<tr><td><label id="pass">密码</label></td>
		<td><input type="password" id="pass" name="pass1" placeholder="请输入密码不低于六位数字字母组合" required="required" pattern="[0-9a-zA-Z]{5}[0-9a-zA-Z]+"/></td></tr>
		<tr><td><label id="pass">密保锁</label></td><td><input type="password" id="mibao" name="mibao" placeholder="请设置密保锁用于修改密码" required="required"/></td></tr>
		<tr><td><input type="submit" value="注册" name="submit"/></td></tr>
		
		</form>
		</table>
		</div>
		</div>
		</div>
		<?php 
		
		
		include("conn.php");
		if(!empty($_POST["submit"])){
			$a=$_POST["user1"];
			$b=mysqli_query($conn,"select * from d where id='{$a}'");
			if(mysqli_num_rows($b)>0){
				echo "<script>alert('账号存在');</script>";
			}
			else{
				$a=$_POST["user1"];
				$b=$_POST["pass1"];
				$c=$_POST["mibao"];
				$i=mysqli_query($conn,"insert into d(id,name,mibao) values('{$a}','{$b}','{$c}')");
				if($i){
					echo "<script>window.location.href='1.php';</script>";
				}
			}
		}
		
		?>
	</body>
</html>
