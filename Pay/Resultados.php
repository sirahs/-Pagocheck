
<?php

   	$conexion=mysqli_connect('localhost','root','','encuesta');


?>
<!DOCTYPE html>
<html>
<head>
	<title>listado de resultados</title>
</head>
<body text="White" background="f3.jpg">

			<table border="10" bordecolor="BLACK" bgcolor= "red" border="1" cellpadding="1" cellspacing="1"  >
		<tr>
			
			<td>Nombre</td>
			<td>1.-Pregunta</td>
			<td>2.-Pregunta</td>
			<td>3.-Pregunta</td>
			<td>4.-Pregunta</td>
			<td>5.-Pregunta</td>	

		</tr>
		<?php
			$sql="SELECT * from preguntas";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			
			<td><?php echo $mostrar['N'] ?></td>
			<td><?php echo $mostrar['SP'] ?></td>
			<td><?php echo $mostrar['CC'] ?></td>
			<td><?php echo $mostrar['QP'] ?></td>
			<td><?php echo $mostrar['QS'] ?></td>
			<td><?php echo $mostrar['QI'] ?></td>
			
		</tr>
		<?php 
	}
	 ?>
	</table>

	<a href="Registro.php" class="myButton">Regresar al Formulario</a>

</body>
</html>