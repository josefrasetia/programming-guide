<?php
	include "include/konek.php";

	$id = $_POST['dataid'];
	$name = $_POST['nam'];
	$address = $_POST['address'];
	$hoby = $_POST['hoby'];
	$stt = sqlsrv_query($konek, "update data set id='$id', name='$name', address='$address', hoby='$hoby' where id='$id'");

?>