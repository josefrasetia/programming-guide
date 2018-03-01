<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	error_reporting(E_ALL ^ E_NOTICE | E_WARNING);
	error_reporting(0);

    $host2 = "KELVINF";

    $konekinfo2= array( "Database"=>"crud", "UID"=>"sa", "PWD"=>"syaikelvin11");
    $konek = sqlsrv_connect($host2, $konekinfo2);
    if(!$konek){
        echo "Failed to connect";
    }
?>