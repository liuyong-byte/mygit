<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<script>
			
		</script>
	</head>
	<body>
		<?php 
		include("conn.php");
		if(!empty($_COOKIE["user"])){
		$a=$_COOKIE["user"];
		
		$q=mysqli_query($conn,"insert into qianbao(id,sum) value('{$a}','100')");
		$s=mysqli_query($conn,"select sum from qianbao where id='{$a}'");
		$ss=mysqli_fetch_array($s);
		echo "用户".$a;
		echo "钱包:".$ss["sum"];	
		}
		else{
			echo "请登录";
		}
		
		?>
		<?php 
		if(!empty($_GET["t"])){
			$t=$_GET["t"];
			$yu=$ss["sum"]-$t;
			$y=mysqli_query($conn,"update qianbao set sum='{$yu}' where id='{$a}'");
			$s1=mysqli_query($conn,"select sum from qianbao where id='{$a}'");
			$s2=mysqli_fetch_array($s1);
			
			if($s2["sum"]==0){
				echo "余额不足";
			}
			if($s2["sum"]<$t){
				echo "白条欠款中";
			}
			else{
				echo "用户".$a;
				
				echo "支付".$t."成功";
				
				echo "余额".$s2["sum"];
			}
		}
		
		?>
	</body>
</html>
