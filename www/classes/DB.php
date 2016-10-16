<?

class DB{
	private $link;
	public function __construct(){
		$this->link=mysqli_connect('localhost','root','','mvc');
}
	public function query($sql,$class='stdClass'){
		$res=mysqli_query($this->link,$sql);
		if($res===false)
			return false;
		$ret=[];
		while($row=mysqli_fetch_object($res,$class)){
			$ret[]=$row;
		}
		return $ret;
	}
} 















?>