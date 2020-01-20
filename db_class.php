<?php 
require_once "Config.php";

class db_class{
	
	private $config;
	private $mysqli;
	private static $db = null;
	
	public function __construct() {
		$this->config = new Config();
		$this->mysqli = new mysqli($this->config->db_host, $this->config->db_user, $this->config->db_password, $this->config->db_name);
		$this->mysqli->query("SET NAMES 'utf8'");
	}
	
	public static function getDB() {
		if (self::$db == null) self::$db = new db_class();
		return self::$db;
	}
	
	public function select($table_name, $param = ''){
		$query = "SELECT * FROM `".$table_name."`$param ";
		$result = $this->mysqli->query($query);
		if (!$result) return 'error';
		$data = array();
		while (($row = $result->fetch_assoc()) != false) {
			$data[] = $row;
		}
		var_dump($data);
		return $data;
	}
	
	public function save($data, $table_name){
		$fields = array('name','email','text');
		$query = "INSERT INTO ".$table_name." (";
	
		foreach ($fields as $field => $value){
			$query .= "`$value`,";
		}
		$query = substr($query, 0, -1);
		$query .= ") VALUES (";
		
		foreach ($data as $field => $value){
			$query .= "'$value',";
		} 
		
		$query = substr($query, 0, -1);
		
		$query .= ")";
		$this->mysqli->query($query);
		
	}
	
	if(mysqli_num_rows($user_result) == 1) {
				while($user = mysqli_fetch_array($user_result)){
					mysqli_query($db,"UPDATE status_chat SET status_name = '1' WHERE user_id = '$user_id' AND chats_id = '$chats_id'");
				}
			}
			
			
			if(mysqli_num_rows($user_result) == 1) {
				while($user = mysqli_fetch_array($user_result)){
					mysqli_query($db,"INSERT INTO status_chat  (user_id, status_name, chats_id) VALUES ('$user[id]','1','$chats_id')");
				}
			}
	
}


?>