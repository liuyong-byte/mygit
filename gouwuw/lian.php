<?php 
class lian {
	public $a="127.0.0.1";
	public $b="root";
	public $c="123456";
	public $d="admin";
	public function val(){
		return $this->a.$this->b.$this->c.$this->d;//调用类本身属性不需要使用$变量符号$this-> 后的变量不带$符
		//1.直接取整，舍弃小数，保留整数：intval()； 
//2.四舍五入取整：round()； 
//3.向上取整，有小数就加1：ceil()； 
//4.向下取整：floor()
	}
	//连接数据库
	public function con(){
		$this->val();
		
		$conn=mysqli_connect($this->a,$this->b,$this->c,$this->d);
		mysqli_query($conn,"set names utf8");
		return $conn;
		}
	
}
class cz extends lian{
	//查询
	public function sel($page){
		
		
		if($page==null){
			$s=mysqli_query($this->con(),"select * from things limit 0,3");
			while($ss=mysqli_fetch_array($s)){
				echo "<tr><td>{$ss[0]}</td><td>{$ss[1]}</td></tr>";
			}
		}
		else{
			$p=$page*3;
			$s=mysqli_query($this->con(),"select * from things limit {$p},3");
			while($ss=mysqli_fetch_array($s)){
				echo "<tr><td>{$ss[0]}</td><td>{$ss[1]}</td></tr>";
			}
		}
		
	}
	//分页
	public function page(){
		$s=mysqli_query($this->con(),"select * from things");
		
		$b=mysqli_num_rows($s);
		$s=ceil($b/3);
		return $s;
	}
	public function ins(){
		
	}
	public function del(){
		
	}
	public function upd(){
		
	}
}
?>
