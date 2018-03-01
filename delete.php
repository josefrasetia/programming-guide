<?php
	include "include/konek.php";

	$id = $_POST['id'];
	$stt = sqlsrv_query($konek, "delete from data where id = '$id'");
?>