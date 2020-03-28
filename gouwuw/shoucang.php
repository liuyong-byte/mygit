<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css" />
<style>
img{width:100px;height:100px;}
</style>
</head>

<body>
<div class="container">
<div class="row">
<div class="col-lg-12">
<?php 
session_start();
include("conn.php");
if(!empty($_GET["mz"])){
$a=$_SESSION["b"];
$b=$_GET["mz"];
$c=mysqli_query($conn,"insert into scj values('".$a."','".$b."')");
if($c){

$d=mysqli_query($conn,"select smz from scj where sname='{$a}'");
$d1=mysqli_fetch_array($d);
$g=mysqli_query($conn,"select * from fz where fztupian='".$d1[0]."'");
while($g1=mysqli_fetch_array($g))
{echo "<div class='col-lg-4' ><img src='fz/{$g1[0]}' width:100px;height:100px;/><p><span>{$g1[1]}</span><span>{$g1[2]}</span></p></div>";	
}
}
}

if(!empty($_GET["xs"])){
	$m=$_GET["xs"];
	$d=mysqli_query($conn,"select smz from scj where sname='{$m}'");
	while($d1=mysqli_fetch_array($d)){
		$g=mysqli_query($conn,"select * from fz where fztupian='".$d1[0]."'");
		while($g1=mysqli_fetch_array($g))
		{echo "<div class='col-lg-4' ><img src='fz/{$g1[0]}' width:100px;height:100px;/><p><span>{$g1[1]}</span><span>{$g1[2]}</span></p></div>";	
		}
	}

}
?>
<a href="taobao.php">首页</a>

</div>
</div>
</div>
</body>
</html>