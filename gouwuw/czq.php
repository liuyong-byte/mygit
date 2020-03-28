
<?php 
class con{
	public function conn(){
		$a="127.0.0.1";
		$b="root";
		$c="123456";
		$q="admin";
		
		$conn=mysqli_connect($a,$b,$c,$q);
		mysqli_query($conn,"set names utf8");
		return $conn;
	}
}
class czz extends con{
	public function cx($a){
		echo $a;
		$r=mysqli_query($this->conn(),"select * from fz where fid='{$a}'");
		while($rr=mysqli_fetch_array($r)){
									 echo "<div style='margin-top:10px;'><span>{$rr[1]}</span><img src='fz/{$rr[0]}' style='display:inline-block;'width='100px' height='100px'><span>{$rr[2]}元</span></div>";
		}
	}
	public function his(){
		
		$r=mysqli_query($this->conn(),"select * from history");
		while($rr=mysqli_fetch_array($r)){
				echo "<tr><td>{$rr[0]}</td><td>{$rr[1]}</td><td>{$rr[2]}</td><td>{$rr[3]}</td></tr>";
		}
	}
	
}
class ins extends con{
	public function cr($a,$b,$c,$d){
		$dd=mysqli_query($this->conn(),"select fid from fzl where fname='{$d}'");
		$ff=mysqli_fetch_array($dd);
		$i=mysqli_query($this->conn(),"insert into fz values('{$a}','{$b}','{$c}','{$ff[0]}')");
		if($i){
			echo "提交成功";
		}
	}
}
?>
