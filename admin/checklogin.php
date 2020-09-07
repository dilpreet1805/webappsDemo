<?php
	if($_SESSION['Admin_Username']!=true)
	{
		header('location:login.php');
	}
?>