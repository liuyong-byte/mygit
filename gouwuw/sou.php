<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		
		<form action="sousuo.php?user=<?php echo $_SESSION["b"]; ?>" method="post">
		<div class="input-group col-lg-8">
			<label for="a" class="input-group-addon">输入</label>
			<input type="text" name="shop" id="a" class="form-control"  placeholder="请登录搜索购买"/>
			<span class="input-group-addon"><input type="submit" name="sub2" value="搜索"/></span>
		</div>
		                   
		</form>
	</body>
</html>
