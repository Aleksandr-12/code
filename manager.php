<?php
require_once 'connect_db.php';
require_once 'db_class.php';

if($_GET != null){
	$data = $_GET;
}
new connect_db($data);

$db = db_class::getDB();
$d = $db->select('comment','ORDER BY id DESC LIMIT 1;');
echo json_encode($d);

?>