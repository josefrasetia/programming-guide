<?php
	include "include/konek.php";
	$id = $_POST['id'];
	$sql = sqlsrv_query($konek, "select * from data where id = '$id' order by name ASC");
    $row = sqlsrv_fetch_array($sql);
	echo "
	<div class='row'>  
	  <table class='table table-stripped'>
	    <tr>
	      <td>id</td>
	      <td>:</td>
	      <td><input type='text' class='form-control' placeholder='Your id' name='dataid' value=".$row['id']." required readonly></td>
	    </tr>
	    <tr>
	      <td>Name</td>
	      <td>:</td>
	      <td><input type='text' class='form-control' name='nam' placeholder='Your name' value='".$row['name']."' required style='text-transform:capitalize;'></td>
	    </tr>
	    <tr>
	      <td>Address</td>
	      <td>:</td>
	      <td><textarea id='alamat' class='form-control' name='address' placeholder='Your address' style='text-transform:capitalize;' required=''>".$row['address']."</textarea></td>
	    </tr>
	    <tr>
	      <td>Hoby</td>
	      <td>:</td>
	      <td><input type='text' class='form-control' name='hoby' placeholder='Your hoby' value='".$row['hoby']."' required style='text-transform:capitalize;'></td>
	    </tr>
	  </table>
	</div>";
?>