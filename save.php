<?php
	include "include/konek.php";

	$id = $_POST['dataid'];
	$name = $_POST['nam'];
	$address = $_POST['address'];
	$hoby = $_POST['hoby'];
	$stt = sqlsrv_query($konek, "insert into data values ('$id', '$name', '$address', '$hoby')");

?>