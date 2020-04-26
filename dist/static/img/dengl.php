<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

<link href="bootstrap.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-2.1.0.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>



</head>

<body>
<?php 
$yh=$_POST["user2"];
include("conn.php");
?>
<div class="row">
				<ul class="nav nav-pills col-lg-4">
					<li><a href=""><?php echo $yh; ?></a></li>
					<li><a href="">个人中心</a></li>
					<li><a href="dengl.php?name=exit">注销</a></li>
                    <?php 
					if(!empty($_GET["name"])){
						unset($yh);
						header("zz.php");
						}
					?>
				</ul>
				<ul class="nav nav-pills col-lg-6 col-lg-push-2">
					<li><a href="">我的淘宝</a></li>
					<li><a href="">购物车</a></li>
					<li><a href="">收藏夹</a></li>
					<li id="fn1"><a href="">商品分类<span class="caret"></span></a>
						<div style="position: absolute;" id="fn2">
							<ul>
								<li><a href="">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
							</ul>
						</div>
					</li>
					<li><a href="">卖家中心</a></li>
					<li><a href="">网站导航</a></li>
				</ul>
			</div>
            <div class="row">
           <?php 
		   if(!empty($yh)){
		  $img=mysqli_query($conn,"select * from fz");
		  while($im=mysqli_fetch_array($img)){
		   ?>
           <div class="col-lg-2">
           <div class="col-lg-12"><img src="img/<?php echo $im["fzname"] ?>" width="100px" height="100px"/></div>
           <p style="text-align:center"><?php echo $im["fztupian"] ?></p>
           </div>
           <?php } } ?>
            </div>

	

</body>
</html>