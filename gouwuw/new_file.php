<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<span>增加商品</span>
		<form action="guanli.php" method="post" enctype="multipart/form-data">
			<select name="fzl">
				<option value="长裤">长裤</option>
				<option value="短袖">短袖</option>
				<option value="短袖女">短袖女</option>
				<option value="毛衣男">毛衣男</option>
				<option value="毛衣女">毛衣女</option>
				<option value="儿童内">儿童内</option>
				<option value="内裤男">内裤男</option>
				<option value="裙子女">裙子女</option>
			</select>
			<input type="file" name="file" placeholder="请选择照片"/>
			
			<input type="text" name="tname" placeholder="请输入服装名字">
			<input type="text" placeholder="价格" name="tprice">
			<input type="submit" value="提交" name="sub">
		</form>
		
	</body>
</html>
