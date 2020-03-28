<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style>
img{width:100px;height:100px;}
</style>
</head>

<body>
<?php 
include("conn.php");

if(!empty($_COOKIE["user"])){
	$a=$_COOKIE["user"];

$r=mysqli_query($conn,"select smz from scj where sname='".$a."'");
while($r1=mysqli_fetch_array($r)){
echo $r1[0];
$g=mysqli_query($conn,"select * from fz where fztupian='".$r1[0]."'");
$g1=mysqli_fetch_array($g);
echo "<div><img src='fz/{$g1[0]}'/><span>{$g1[1]}</span><span>{$g1[2]}</span><a href='sc.php?name={$g1[1]}'>删除</a><a href='sousuo.php?name={$g1[1]}'>购买</a></div>";
}
if(!empty($_GET["name"])){
	$n=$_GET["name"];
	$r=mysqli_query($conn,"delete from scj where smz='".$n."'");
	if($r){
		echo "<script>alert('删除成功');window.location.href='sc.php';</script>";
	}
}

	}
	else{
		echo "请登录";
		}
?>
</body>
</html>