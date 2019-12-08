<?php
	session_start();
	if($_SESSION["usuario"]["logado"] == false){
		header("location: ../login.php");
	}
