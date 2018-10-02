<?
class Postget{

	private $db;

	function __construct(&$db)
	{
		$this->db=$db;
	}

	public function insertData($post,$files){
		$mysqli = $this->db;
		var_dump($this->db);
		$filename = addslashes($files['postfile']['name']);
		$namenick = addslashes($post['nick']);

		$result = $this->db->query("INSERT INTO `MyGuests` (`firstname`, `lastname`, `email`) VALUES ('$filename', '$namenick', 'q')");

		
		if($result){

			echo "succes";
		}else{
			echo "lol";
		}
		
        return $result;

		
	}

	public static function selectData($mysqli,$query){

		$result = $mysqli->query($query);
        return $result;

		
	}


}
?>