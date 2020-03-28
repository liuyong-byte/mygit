<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
<div class="row">
<div class="col-lg-4 col-lg-push-4">
	<?php
	global $s;
	$s=0;
	function add(){
		global $s;
		$s++;
		return $s;
	}
	
	?>
<?php 
session_start();
include("conn.php");
if(!empty($_POST["sub2"])){
		$sh=$_POST["shop"];
		echo $sh;
		$sh1=$_GET["user"];
		$_SESSION["shop"]=$sh;
		$_SESSION["user"]=$sh1;
		echo $sh1;
	}
	if(!empty($_SESSION["b"])){
	if(!empty($_GET["name"])){
		$_SESSION["shop"]=$_GET["name"];
	}	
	}
	else{
		echo "<script>alert('请登录');window.location.href='1.php';</script>";
	}
	
	if(!empty($_GET["jg"])){
		$sum=null;
		date_default_timezone_set('PRC');
		$t=date("Y-m-d H:i:s");
	
		$s=$_SESSION["b"];
		$sh=$_SESSION["shop"];
		$r=mysqli_query($conn,"select * from fz where fztupian='".$_SESSION["shop"]."'");
		$rr=mysqli_fetch_array($r);
		$i=mysqli_query($conn,"insert into history values('{$s}','{$sh}','{$_GET['jg']}','{$t}')");
		if($i){
			echo "<script>console.log(111)</script>";
		}
	}
$r=mysqli_query($conn,"select * from fz where fztupian='".$_SESSION["shop"]."'");
if(empty($_SESSION["shop"])){
	echo "<script>alert('请重新登录');var a=confirm('是否跳转登录');if(a==true){window.location.href='taobao.php';}</script>";
}
while($r1=mysqli_fetch_array($r))
{
?>

<img src='fz/<?php echo $r1[0]; ?>' height="300px" width="300px"/>
<P><span><?php echo $r1[1]; ?></span><span><?php echo $r1[2]."元"; ?></span></P>
<p><a href="shoucang.php?mz=<?php echo $r1[1]; ?>">进入购物车</a></p>
<p><a href="shoucang.php?mz=<?php echo $r1[1]; ?>">加入收藏</a></p>
<p><a href="sousuo.php?jg=<?php echo $r1[2];?>">购买</a></p>
</div>
<?php 
if(!empty($_GET["jg"])){
	$t=$_GET["jg"];
	$_SESSION["t"]=$t;
	echo "<script>var a=confirm('是否花费{$t}购买');if(a==true){alert('购买成功');window.location.href='qianbao.php?t={$t}&n={$_COOKIE["user"]}';}</script>";
	
}
?>


<?php } ?>

</div>
<div class="row">
	<div class="col-lg-4 col-lg-push-4">
		<form action="sousuo.php?shop=<?php echo $_SESSION["shop"];?>" method="post">
			<textarea name="text" id="" cols="20" rows="5">
				
			</textarea>
			<input type="submit" value="评论" name="sub">
		</form>
		<?php 
		if(isset($_POST["sub"])&&$_POST["sub"]=="评论"){
			$te=$_POST["text"];
			$aa=trim($te);
			echo $te;
			
				$n=$_SESSION["b"];
				$nn=mysqli_query($conn,"insert into things values('{$n}','{$aa}')");
				if($nn){
					echo "<script>console.log(22);</script>";
				}
			
		}
		?>
		
	</div>
</div>
</div>
</body>
</html>