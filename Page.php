<?php

abstract class Page{
	
	public $header = "tmp/header.php";
	public $footer = "tmp/footer.php";
	public $DirTmp = "tmp/";

	
public function showPage($page="") {
	
		ob_start();
		include ($this->header);
		include ($this->DirTmp.$page->tmp.'.php');
		include ($this->footer);
	
		echo ob_get_clean();
	}
}

?>

