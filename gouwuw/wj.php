<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css" />
<style>
	input{
		font-family: 楷体;
		
	}
</style>
</head>

<body>
<div class="container">
<div class="row">
<div class="col-lg-6 col-lg-push-3" style="background:salmon;height: 300px;padding-top: 100px;padding-left: 50px;">
<form action="wj.php" method="post">
<input type="text" placeholder="请输入账号" required="required" pattern="^1\d{10}" name="zh" style="height: 50px;width: 200px;"/><br>
<input type="password" placeholder="请输入密保锁" pattern="\w{5}\w+" required="required" name="mb" style="height: 50px;width: 200px;"/><br>
<input type="password" placeholder="请输新密码" pattern="\w{5}\w+" required="required" name="mm" style="height: 50px;width: 200px;"/><br>
<input type="submit" value="请确认修改" name="xg" pattern="\w{5}\w+" required="required"/>
</form>
</div>
</div>
</div>
<?php 
include("conn.php");
if(isset($_POST["xg"])&&$_POST["xg"]="请确认修改"){
$zh=$_POST["zh"];
$mm=$_POST["mm"];
$mb=$_POST["mb"];
$jg=mysqli_query($conn,"select mibao from d where id='{$zh}'");
$m=mysqli_fetch_array($jg);
if($mb==$m["mibao"]){
$jg=mysqli_query($conn,"update d set name='{$mm}' where id='{$zh}'");
if($jg){
echo "<script>window.onload=function(){
var a=confirm('是否跳转登录');
if(a==true){
window.location.href='1.php';
}
if(a==false){
alert('请自行跳转登录页面');
}
}</script>";
}}}
?>
</body>
</html>