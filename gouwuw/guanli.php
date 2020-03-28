<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap.css">
<script src="jquery-2.1.0.js"></script>
<script src="bootstrap.js"></script>
<title>无标题文档</title>
<style>
	 div#te input{
		width: 200px;
		height: 30px;
		font-family: 楷体;
		margin-top: 10px;
	}
	div#a{
		font-size: 30px;
		color: skyblue;
		
	}
	ul#r div.tab-content{
		display: inline-block;
	}
	table tr td{
		border: 1px solid black;
		margin: 10px;
		padding: 10px;
	}
	div{
		overflow: auto;
		animation: ;
	}
</style>
</head>

<body>
	<div class="container" style="background: skyblue;"> 
		<div class="row">
			<div class="col-lg-3" style="background: skyblue;">
					
					
					
					<?php 
					session_start();
					
						
					
					
					if(!empty($_SESSION["u"])){
						
						echo "<span>尊敬的管理员</span>"."<span style='color:red;font-family:楷体;'>{$_SESSION["u"]}<span>"."<span>欢迎回家</span>";
						echo "<a href='guanli.php?close=exit'>注销</a>";
						if(!empty($_GET["close"])){
							unset($_SESSION["u"]);
							echo "<script>window.location.href='1.php';</script>";
						}
					}
					else{
						echo "<a href='1.php'>登录</a>";
					}
					?>
			</div>
			<div id="a" class="col-lg-9" style="text-align: -moz-center;background: salmon;">笑笑购物网管理后台</div>
				<ul class="nav col-lg-3" id="r" style="border: 1px solid saddlebrown;">
					<li class="active"><a href="#q" data-toggle="tab"data-target="#q">长裤</a></li>
					<li><a href="#b" data-toggle="tab"data-target="#b">短袖</a></li>
					<li><a href="#c" data-toggle="tab" data-target="#c">毛衣</a></li>
					<li><a href="#d" data-toggle="tab" data-target="#d">内裤</a></li>
					<li><a href="#e" data-toggle="tab" data-target="#e">裙子</a></li>
					<li><a href="#f" data-toggle="tab" data-target="#f">儿童</a></li>
				</ul>
				<!-- 商品界面 -->
					<div class="tab-content col-lg-3">
						<?php 
						include("conn.php");
						include("czq.php");
						
						?>
						<div class="tab-pane active" id="q" style="height: 300px;overflow: auto;"><?php
						$q=new czz();
						 $q->cx("1");
						
						 ?>
						 
						 </div>
						<div class="tab-pane" id="b" style="height: 300px;overflow: auto;">
							<?php
							 
							  $q->cx("2");
							 ?>
						</div>
						<div class="tab-pane" id="c" style="height: 300px;overflow: auto;">
							<?php
							 
							  $q->cx("3");
							 ?>
						</div>
						<div class="tab-pane" id="e" style="height: 300px;overflow: auto;">
							<?php
							
							  $q->cx("4");
							 ?>
						</div>
						<div class="tab-pane" id="f" style="height: 300px;overflow: auto;">
							<?php
							 
							  $q->cx("5");
							 ?>
						</div>
						<div class="tab-pane" id="d" style="height: 300px;overflow: auto;">
							<?php
							 
							  $q->cx("6");
							 ?>
						</div>
					</div>
					<div class="col-lg-6">
						<ul class=" nav nav-tabs">
							
							<li class="active"><a href="#qq" data-toggle="tab" data-target="#qq">评论前三条</a></li>
							<li><a href="#ww" data-toggle="tab" data-target="#ww">毛衣更新</a></li>
							<li><a href="#rr" data-toggle="tab" data-target="#rr">内裤更新</a></li>
							<li><a href="#t" data-toggle="tab" data-target="#t">儿童更新</a></li>
							<li><a href="#y" data-toggle="tab" data-target="#y">商品记录</a></li>
						</ul>
						<?php include("lian.php");?>
						<!-- 更新界面 -->
						<div class="tab-content">
							
							<div class="tab-pane active" id="qq" style="height: 350px;width: 300px;border: 1px solid salmon;">1
								<ul>
								<?php
									$c=new cz();
									for($i=0;$i<=$c->page()-1;$i++){
										$ii=$i+1;
										echo "<li style='display:inline-block;list-style-type:none;margin-left:10px;'><a href='guanli.php?name={$i}'>{$ii}</a></li>";
									}
									?>
								</ul>
								<div>
									<table>
										<?php 
										if(!empty($_SESSION["u"])){
											if(!empty($_GET["name"])){
												$pag=$_GET["name"];
												echo $c->sel($pag);
											}
											else{
												echo $c->sel(0);
											}
										}
										else{
											 echo "<a href='1.php'>请登录</a>";
										}
										
										?>
									</table>
								</div>
								</div>
							<div class="tab-pane" id="ww" style="height: 350px;width: 300px;border: 1px solid salmon;">
							<?php
							
							 if(!empty($_SESSION["u"])){
								  $q->cx("5");
							 }
							 else{
								 echo "<a href='1.php'>请登录</a>";
							 }
							 ?>
							</div>
							<div class="tab-pane" id="rr" style="height: 350px;width: 300px;border: 1px solid salmon;">
							<?php
							if(!empty($_SESSION["u"])){
															  $q->cx("6");
							}
							else{
									 echo "<a href='1.php'>请登录</a>";
							}
							  
							 ?>
							</div>
							<div class="tab-pane" id="t" style="height: 350px;width: 300px;border: 1px solid salmon;">
							<?php
							 if(!empty($_SESSION["u"])){
							  $q->cx("3");
							  }
							  else{
							  		 echo "<a href='1.php'>请登录</a>";
							  }
							 ?>
							</div>
							<div class="tab-pane" id="y" style="height: 350px;width: 300px;border: 1px solid salmon;">
							<table>
								<?php
								if(!empty($_SESSION["u"])){
								 $q->his();
								   }
								   else{
								   		 echo "<a href='1.php'>请登录</a>";
								   }
								 ?>
							</table>
							</div>
						</div>
					</div>
					
		</div>
		<div class="row">
			<div class="col-lg-3" style="margin: 0px;padding: 0px;">
				<p style="margin: 0px;padding: 0px;">管理员界面</p>
				<div style="width: 400px;height: 250px;background: salmon;margin: 0px;padding: 0px;" id="te">
					<form action="guanli.php?user=<?php if(!empty($_SESSION["u"])){echo $_SESSION["u"];}else{echo "";} ?>" method="post">
					
					<input type='text' name='text21' placeholder="输入商品名删除"/>
					<input type='text' name='text22' placeholder="输入商品名查询"/>
					<select name="text33">
						<option value="长裤">长裤</option>
						<option value="短袖">短袖</option>
						<option value="短袖女">短袖女</option>
						<option value="毛衣男">毛衣男</option>
						<option value="毛衣女">毛衣女</option>
						<option value="儿童内">儿童内</option>
						<option value="内裤男">内裤男</option>
						<option value="裙子女">裙子女</option>
					</select>
					<input type="submit" name="subb" value="提交"/>
					</form>
				</div>
			</div>	
			<div class="col-lg-3">
				<?php 
				if(!empty($_SESSION["u"])){
					include("sql.php");
				}
				?>
			</div>
			<div class="col-lg-3">
				<button id="but1">查看账号</button>
				<div class="col-lg-12" style="overflow: auto;height: 260px;" id="tt" >
					<table >
						<?php 
						if(!empty($_SESSION["u"])){
							include("table.php");
						}
						?>
					</table>
					<button id="but2">关闭</button>
					
				</div>
				<script>
					$(document).ready(function(){
						$("div#tt").hide();
						$("button#but1").click(function(){
							$("div#tt").show();
							
						})
						$("button#but2").click(function(){
							$("div#tt").hide();
							
						})
					})
				</script>
			</div>
			<div class="col-lg-3">
				<?php 
				if(!empty($_SESSION["u"])){
					include("new_file.php");
				}
				?>
				<?php 
			$ti=new ins();
					if(isset($_POST["sub"])&&$_POST["sub"]=="提交"){
						if(!empty($_SESSION["u"])){
							if(!empty($_FILES)){
								$fid=$_POST["fzl"];
									$a=$_FILES["file"]["name"];
									$b=$_FILES["file"]["tmp_name"];
									$t=$_POST["tname"];
									$p=$_POST["tprice"];
									
										echo $a;
										echo $b;
										$c="./fz/".iconv("utf-8","gb2312",$a);
										move_uploaded_file($b,$c);
											$ti->cr($a,$t,$p,$fid);
										
										
										
									
									
							}
							}
							else{
								echo "<a href='1.php'>请登录</a>";
							}
					}
				
				
				?>
			</div>
		</div>
	</div>
</body>
</html>