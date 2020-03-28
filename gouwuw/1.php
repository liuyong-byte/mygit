<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

<link href="bootstrap.css" rel="stylesheet" type="text/css" />
<script>
	window.onload=function(){
		var a=document.getElementById("but");
		a.onclick=function(){
			window.history.back(-1);
		}
	}
</script>
<style>
	div#d{
		position: relative;
		top: 100px;
		left: 33%;
		
	}
	div.container{
		animation: rorate 3s linear 1;
	}
	@-webkit-keyframes rorate{
		0%{transform: translate3d(100px,10px,10px) scale(0,0);color: skyblue;}
		10%{transform: translate3d(200px,20px,20px) scale(0.2,0.2);color: salmon;}
		30%{transform: translate3d(300px,30px,30px) scale(0.4,0.4);color: darkturquoise;}
		50%{transform: translate3d(400px,40px,40px) scale(0.6,0.6);color: #F2DEDE;}
		70%{transform: translate3d(300px,50px,50px) scale(0.8,0.8);color: aqua;}
		100%{transform: translate3d(100px,60px,60px) scale(1.0,1.0);color: powderblue;}
	}
	@-ms-keyframes rorate{
		0%{transform: translate3d(100px,0px,0px) scale(0);color: skyblue;}
		10%{transform: translate3d(200px,0px,0px) scale(0.2,0.2);color: salmon;}
		30%{transform: translate3d(300px,0px,0px) scale(0.4,0.4);color: darkturquoise;}
		50%{transform: translate(400px,0px,0px) scale(0.6,0.6);color: #F2DEDE;}
		70%{transform: translate(300px,0px,0px) scale(0.8,0.8);color: aqua;}
		100%{transform: translate(100px,0px,0px) scale(1.0,1.0);color: powderblue;}
	}
	@-moz-keyframes rorate{
		0%{transform: translate(100px,0px,0px) scale(0);color: skyblue;}
		10%{transform: translate(200px,0px,0px) scale(0.2,0.2);color: salmon;}
		30%{transform: translate(300px,0px,0px) scale(0.4,0.4);color: darkturquoise;}
		50%{transform: translate(400px,0px,0px) scale(0.6,0.6);color: #F2DEDE;}
		70%{transform: translate(300px,0px,0px) scale(0.8,0.8);color: aqua;}
		100%{transform: translate(100px,0px,0px) scale(1.0,1.0);color: powderblue;}
	}
</style>
</head>

<body>
<div class="container" style="background: linear-gradient(45deg,transparent  20%,blue 30%,salmon 20%,transparent 10%,skyblue 20%);background-size:30px 30px ;>
<div class="row" >
<div class="col-lg-4 col-lg-push-4" id="d" style="background-color:skyblue;background:url(img/beij.jpg);background-repeat:no-repeat;height:500px;padding-top:100px;">
<form action="1.php" method="post">
<table>
<tr>
<th><label for="a1">账号</label></th>
<td><input type="text" id="a1" name="user2" style="border-radius:10px;" placeholder="请输入账号不少于六位" required="required" pattern="\w{5}\w+"/></td>
</tr>
<tr>
<th><label for="a2">密码</label></th>
<td><input type="password" id="a2" name="pass2" style="border-radius:10px;" placeholder="请输入密码号不少于六位" required="required" pattern="\w{5}\w+"/></td>
</tr>
<tr><td><input type="submit" value="登录" id="sub" name="sub" class="btn btn-default"/></td><td><span id="but" class="btn btn-default">返回</span></td></tr>
<tr><td><a href='wj.php'>忘记密码</a><a href="3.php">注册</a></td></tr>
</table>
</form>
</div>
</div>
</div>
<?php 
session_start();
include("conn.php");
if(!empty($_POST["sub"])){
	if(!empty($_POST["user2"])&&!empty($_POST["pass2"])){
		$_SESSION["b"]=$_POST["user2"];
		$d=mysqli_query($conn,"select * from admer1");
		
		echo $_POST["user2"];
		 
	 	while($d1=mysqli_fetch_array($d)){//查询返回数组,与下标
			
			if($_POST["user2"]==$d1[0]&&$_POST["pass2"]==$d1[1]){
				$_SESSION["u"]=$_POST["user2"];
			echo "<script>window.location.href='guanli.php?user={$_POST["user2"]}';</script>";
			}
			else{
				$a=$_POST["user2"];
				 	$ad=mysqli_query($conn,"select name from d where id={$a}");
				 	$ad1=mysqli_fetch_array($ad);
				 	if($ad1[0]!=$_POST["pass2"]){
					echo "<script>alert('密码错误');window.location.href='1.php';</script>";
					}
					else{
						echo "<script>alert('登录成功');window.location.href='taobao.php';</script>";
					}
			}
		}
		 
		
				
	
	}
}
?>
</body>
</html>