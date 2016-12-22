<?php 
	mysql_connect("127.0.0.1","root","");
	mysql_select_db("agencia");

	$doc=$_POST["documento"];
	$nom=$_POST["nombres"];
	$tel=$_POST["telefono"];
	$dir=$_POST["direccion"];

	$sql=mysql_query("INSERT INTO turista VALUES('$doc','$nom','$tel','$dir')");
	if($sql){
		echo("Los datos se guardaron correctamente");
	}
?>