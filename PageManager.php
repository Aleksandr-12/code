<?php
require_once "Classes/Home.php";


class PageManager{

	public static function createPage(){
		
		return new Home();
		/*switch($page){
			case Home:
				return new Home();
				break;
			
			default:
				return new NotFound();
				break;
		}*/
	}
}
?>