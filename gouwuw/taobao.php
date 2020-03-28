<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8;width=device-width,initial-scale=1.0" />
<title>笑笑购物网</title>

<link href="bootstrap.css" rel="stylesheet" type="text/css" />
<link href="taobao.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-2.1.0.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>
<script>
	$(document).ready(function(){
	
		function hb(){
							var h=document.documentElement.clientHeight*Math.random()-50;
						var w=document.documentElement.clientWidth*Math.random()-100;
							$("img#hb").animate({top:h+"px",left:w+"px"},5000,function(){
								
							console.log(h);
							console.log(w);
							
							console.log(document.documentElement.clientHeight);
							console.log(document.documentElement.clientWidth);
						})
						}
						hb();
						setInterval(hb,7000);
						$("img#hb").click(function(){
							$("div.hb").show();
						})
						$("button#gb").click(function(){
							$("div.hb").hide();
						})
						setInterval()
	})
</script>
<style>
	div img:hover{
		animation: rorate 6s linear infinite;
	}
	@-webkit-keyframes rorate{
		from{transform: rotate(0deg);}
		to{transform: rotate(360deg);}
	}
	img#hb{
		box-shadow: 4px 5px 4px red;
		
	}
	
	img#hb:hover{
		transform: scale(1.1,1.1);
	}
</style>
</head>

<body>
<img src="1.jpg" alt=""  style="position: absolute;z-index: 999;width:100px;height:100px;" id="hb"/>
<div class="hb" style="width: 300px;height: 300px;border: 1px solid red;background: white;display: ;position: absolute;top: 40%;left: 40%;z-index: 999;display: none;"  >
	计应1704班刘勇送你一个红包
	<button id="gb">关闭</button>
</div>
<div class="container">
			<div class="row">
            <embed src="赵雷成都.mp3" width="0px" height="0px"  autostart=true></embed>
				<ul class="nav nav-pills col-lg-4">
                <?php 
session_start();
include("conn.php");
if(!empty($_COOKIE["user"])){
	$_SESSION["b"]=$_COOKIE["user"];
}

if(!empty($_SESSION["b"])||!empty($_COOKIE["user"])){
$a=$_SESSION["b"];
	setcookie("user",$_SESSION["b"],time()+600);
	if(!empty($_COOKIE["user"])){
		
		$a=$_COOKIE["user"];
	}




if(!empty($_GET["name"])){

echo "<script>window.location.href='1.php';</script>";
unset($_SESSION["b"]);
setcookie("user",$_SESSION["b"],time()-1);

}
echo "<li><a href='#'>{$a}</a></li>";
echo "<li><a href='taobao.php?name=close'>注销</a></li>";
}
else{
echo "<li><a href='1.php'>请登录</a></li>";
echo "<li><a href='3.php'>免费注册</a></li>";
}
					?>
					
					
					<li><a href="">手机逛淘宝</a></li>
				</ul>
				<ul class="nav nav-pills col-lg-6 col-lg-push-2 fn">
					<li><a href="qianbao.php">我的钱包</a></li>
                    <?php 
					if(!empty($_SESSION["b"])){
						echo "<li><a href='sc.php?namea=".$_SESSION["b"]."'>购物车</a></li>";
					}
					else{
						echo "<li><a href='sc.php'>购物车</a></li>";
						}
					?>
					
					<li><a href="shoucang.php?xs=<?php global $a; echo $a; ?>">收藏夹</a></li>
					<li id="fn1" data-toggle ="collapse" data-target = "#fn2"><a href="#">商品分类<span class="caret"></span></a>
						<div style="position: absolute;" id="fn2" class="collapse">
							<ul>
								<li><a href="">特价</a></li>
								<li><a href="">优惠</a></li>
								<li><a href="">折扣</a></li>
							</ul>
						</div>
					</li>
                    
					<li><a href="">卖家中心</a></li>
					<li><a href="">网站导航</a></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-2 " style="padding-bottom:10px">
					<img src="img/gouw.jpg" class="col-lg-8 " />
				</div>
				<div class="col-lg-6 col-lg-push-1">
					<?php 
					if(!empty($_SESSION["b"])){
						include("sou.php");
					}
					else{
						echo "<a href='1.php'>搜索请登录</a>";
					}
					?>
					<div>
						<a href="">新款连衣裙</a>
						<a href="">四件套</a>
						<a href="">潮流</a>
						<a href="">时尚女鞋</a>
						<a href="">短裤</a>
						<a href="">半生裙</a>
					</div>
				</div>
				<div class="col-lg-3 col-lg-push-1">
					<img src="img/gouw.jpg" class="col-lg-5"/>
				</div>
			</div>
			<div class="row">
				<ul class="col-lg-3 bg-danger nav nav-pills">
					<li><a href="">主题市场</a></li>
				</ul>
				<ul class="col-lg-6 list-unstyled nav nav-pills" style="background-color: salmon;">
					<li><a href="">天猫</a></li>
					<li><a href="">聚划算</a></li>
					<li><a href="">天猫超市</a></li>
					<li><a href="">淘抢购</a></li>
					<li><a href="">电器城</a></li>
					<li><a href="">司法拍卖</a></li>
				</ul>
				<ul class="col-lg-3 list-unstyled nav nav-pills" style="background-color: salmon;">
					<li><a href="">飞猪旅行</a></li>
					<li><a href="">智能生活</a></li>
					<li><a href="">苏宁易购</a></li>
				</ul>
			</div>
			
				
				
			<div class="row" style="margin-top: 10px;">
              	<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" >
					
					
					<ul class="nav nav-tabs">
						<li ><a href="#t1" data-toggle = "tab" data-target = "">公告</a></li>
						<li><a href="#t2" data-toggle = "tab" data-target = "">规则</a></li>
						<li><a href="#t3" data-toggle = "tab" data-target = "">论坛</a></li>
						<li><a href="#t4" data-toggle = "tab" data-target = "">安全</a></li>
						<li><a href="#t5" data-toggle = "tab" data-target = "">公益</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="t1">
							<p>天猫新品一目了然</p>
							<p>咸鱼支持免费上门回收</p>
						</div>
						<div class="tab-pane" id="t2">
							<p>！！天猫新品一目了然111</p>
							<p>咸鱼支持免费上门回收</p>
						</div>
						<div class="tab-pane" id="t3">
							<p>！！天猫新品一目了然</p>
							<p>咸鱼支持免费上门回收</p>
						</div>
						<div class="tab-pane" id="t4">
							<p>天猫新品一目了！！然</p>
							<p>咸鱼支持免费上门回收</p>
						</div>
						<div class="tab-pane" id="t5">
							<p>天猫新品！！一目了然</p>
							<p>咸鱼支持！！免费上门回收</p>
						</div>
					</div>
					<div class="col-lg-12 col-xs-12" style="text-align:center">
						<div class=" col-lg-3 col-xs-3">
							<p><img src="img/hf.jpg" alt="" class="col-lg-12 col-md-4 col-sm-4 col-xs-4" /></p>
							<a href="" >充话费</a>
						</div>
						<div class=" col-lg-3 col-xs-3">
							<p><img src="img/lx.jpg" alt="" class="col-lg-12 col-md-4 col-sm-4 col-xs-4" /></p>
						<a href=""  >旅行</a>
						</div>
						<div class=" col-lg-3 col-xs-3">
							<p><img src="img/cx.jpg" alt="" class="col-lg-12 col-md-4 col-sm-4 col-xs-4" /></p>
						<a href=""  >车险</a>
						</div>
					</div>
					<div class="col-lg-12 col-xs-12" style="text-align:center">
						<div class=" col-lg-3 col-xs-3">
							<p><img src="img/cp.jpg" alt="" class="col-lg-12 col-md-4 col-sm-4 col-xs-4" /></p>
							<a href="" >彩票</a>
						</div>
						<div class=" col-lg-3 col-xs-3">
							<p><img src="img/diany.jpg" alt="" class="col-lg-12 col-md-4 col-sm-4 col-xs-4"/></p>
						<a href=""  >电影</a>
						</div>
						<div class=" col-lg-3 col-xs-3">
							<p><img src="img/jd.jpg" alt="" class="col-lg-12 col-md-4 col-sm-4 col-xs-4" /></p>
						<a href=""  >酒店</a>
						</div>
					</div>
					<div class="col-lg-12 col-xs-12" style="text-align:center">
						<div class=" col-lg-3 col-xs-3">
							<p><img src="img/fw.jpg" alt="" class="col-lg-12 col-md-4 col-sm-4 col-xs-4" /></p>
							<a href="" >找服务</a>
						</div>
						<div class=" col-lg-3 col-xs-3">
							<p><img src="img/yc.jpg" alt="" class="col-lg-12 col-md-4 col-sm-4 col-xs-4" /></p>
						<a href=""  >演出</a>
						</div>
						<div class=" col-lg-3 col-xs-3">
							<p><img src="img/sd.jpg" alt="" class="col-lg-12 col-md-4 col-sm-4 col-xs-4"/></p>
						<a href=""  >水电煤</a>
						</div>
                        
					</div>
                   
            </div>
				 <div class="col-lg-8 k">
                    <div class="col-lg-12" style="overflow: auto;height: 400px;" >
                    <?php  include("conn.php"); ?>
                  
                      
                      <?php 
					  $yf=mysqli_query($conn,"select * from fz");
					 while($yf1=mysqli_fetch_array($yf)){
					  
					  ?>
                       <div class="col-lg-2  col-md-2 col-sm-2 col-xs-2"><img src="fz/<?php echo $yf1[0]; ?>"/>
                       <p><?php echo $yf1[1]; ?>  <span><?php echo $yf1[2]."元"; ?><a href="sousuo.php?name=<?php echo $yf1[1]; ?>">购买</a></span></p>
                      </div>
                      <?php } ?>
                    </div>
                    </div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>评论</h4>
						<div style="width: 400px;height: 200px;overflow: auto;background: skyblue;">
							<?php 
							$t=mysqli_query($conn,"select * from things");
							while($tt=mysqli_fetch_array($t)){
								echo "<ul style='margin:0px;padding:0px;'><li><span>{$tt[0]}:</span><span>{$tt[1]}</span><li></ul>";
							}
							?>
						</div>
					</div>
					<div class="col-lg-4 col-lg-push-1" style="padding-top: 30px;">
						<p>客服电话<span>15180911472</span></p>
						<p>客服QQ<span>1256230450</span></p>
						<p>客服微信<span>q5281951</span></p>
						<input type="email"  value="1256230450@qq.com" disabled="disabled"/>
						<div class="time col-lg-12" style="font-family: 楷体;font-size: 20px;border: 1px solid salmon;margin-top: 20px;">
							
						</div>
						<script src="jquery-2.1.0.js"></script>
						<script>
							$(document).ready(function(){
								function time(){
									var a=new Date();
									var y=a.getFullYear();
									var m=a.getMonth();
									var t=a.getDay();
									var h=a.getHours();
									var i=a.getMinutes();
									var s=a.getSeconds();
									if(s<10){
										$("div.time").html(y+"年"+m+"月"+t+"日"+h+"时"+i+"分"+"0"+s+"秒");
									}
									else{
										$("div.time").html(y+"年"+m+"月"+t+"日"+h+"时"+i+"分"+s+"秒");
									}
								}
								time();
								setInterval(time,1000)
							})
						</script>
					</div>
					<div class="col-lg-3" >
						
					</div>
				</div>
			</div>
			
		</div>
</body>
</html>