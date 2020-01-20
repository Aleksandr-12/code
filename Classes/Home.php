<?php
require_once "Page.php";
require_once "db_class.php";


class Home extends Page{
	public $tmp = 'index';
	public $title = 'Home';
	public $data;
	public $db_connect;
	
	public function __construct(){
		$this->db_connect = db_class::getDB();
		$this->data = $this->db_connect->select('comment');
	}
	
}

?>