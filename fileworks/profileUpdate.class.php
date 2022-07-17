<?php 



class profileUpdate {
	function __construct ($email, $isim, $soyisim, $sifre1, $sifre2 ){
		if ($sifre1 === $sifre2) {
			header("location:index.php?islem=tamam");
			exit;
		} else {
			header("location:index.php?islem=hatali");
			exit;
		}
	}
}











 ?>