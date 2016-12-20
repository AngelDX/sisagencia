<?php 
	mysql_connect("127.0.0.1","root","");
	mysql_select_db("agencia");
	$sql=mysql_query("SELECT * FROM turista");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Turistas</title>
	<link rel="stylesheet" href="recursos/css/font-awesome.css">
	<link rel="stylesheet" href="recursos/css/estilos.css">
	<script type="text/javascript" src="recursos/js/jquery-3.1.1.min.js"></script>
</head>
<body>
	<h1>Lista de Turistas</h1>
	<input type="button" value="Nuevo Turista" onclick="nuevo()">
	<div class="formulario" style="display: none;">
		<form action="#">
			<table border="1px">
				<tr>
					<td>Documento</td>
					<td><input type="text" name="documento"></td>
				</tr>
				<tr>
					<td>Nombres y Apellidos</td>
					<td><input type="text" name="nombres"></td>
				</tr>
				<tr>
					<td>Teléfono</td>
					<td><input type="text" name="telefono"></td>
				</tr>
				<tr>
					<td>Dirección</td>
					<td><input type="text" name="direccion"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><button>Guardar</button></td>
				</tr>
			</table>
		</form>
	</div>
	<table border="1px" bgcolor="yellow">
		<tr>
			<th>#</th>
			<th>Documento</th>
			<th>Nombres</th>
			<th>Teléfono</th>
			<th>Dirección</th>
		</tr>
		<?php 
			$i=0;
			while($rs=mysql_fetch_array($sql)){
		?>
		<tr>	
			<td><?php echo ++$i ?></td>
			<td><?php echo $rs["documento"] ?></td>
			<td><?php echo $rs["nombres"] ?></td>
			<td><?php echo $rs["telefono"] ?></td>
			<td><?php echo $rs["direccion"] ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>

<script>
	function nuevo(){
		$(".formulario").toggle().slideDown(1000);
	}
</script>