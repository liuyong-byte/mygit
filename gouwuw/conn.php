<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 
$a="127.0.0.1";
$b="root";
$c="123456";
$q="admin";

$conn=mysqli_connect($a,$b,$c,$q);
mysqli_query($conn,"set names utf8");

?>
</body>
</html>