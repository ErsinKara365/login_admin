<?php 
session_start();
ob_start();


class oturumKontrol {
	function __construct (){
		if (empty($_SESSION) == True) {
			header("location:login.php?izinsiz=giris");
			exit;

		}

	}
}



 ?>