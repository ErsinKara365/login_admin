<?php 
session_start();
ob_start();


/**
 * 
 */
class login
{
	function __construct($username, $password)
	{
		

		$isim = "ersin@gmail.com";
		$sifre = "123456" ;
		if ($username == $isim ) {
			if ($password == $sifre) {
				$_SESSION["mail"] = $username ;
				$_SESSION["uid"] = true ;
				header("location:index.php");
				exit;

			}  else {
				header("location:login.php?giris=hatali");
				exit;
			}


		} else {
			header("location:login.php?giris=hatali");
			exit;
		}
	}
}







?>