<?php 
	mysql_connect("127.0.0.1","root","");
	mysql_select_db("agencia");

	$doc=$_POST["documento"];

	$sql=mysql_query("DELETE FROM turista WHERE documento='$doc'");
	if($sql){
		echo("Los datos se guardaron correctamente");
	}
 ?>