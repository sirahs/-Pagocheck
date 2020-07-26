<?php
$servidor="localhost";
$usuario="root";
$clave="";
$baseDedatos="encuesta";
    
    $enlace = mysqli_connect( $servidor, $usuario, $clave, $baseDedatos );

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Tarjeta de Crédito </title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body >

    	    
	<div class="contenedor">
		<form action="#" class="formulario" name="formulario" method="POST">
			<div class="contenedor-inputs">
				<b>Numero</b>
				<input type="text" REQUIRED name="Numero" placeholder="">

                <b>Nombre Propietario</b>
				<input type="text" REQUIRED name="Nombre" placeholder="">

                 <b>Fecha Expiracion</b>
				<input type="text" REQUIRED name="Expiracion" placeholder="">

                     <b>Ccv2</b>
				<input type="text" REQUIRED name="ccv" placeholder="">





				
			</div>
             
			<input type="submit" class="btn" name="registrarse" value="Ingresar datos">

	
        
       
			

		</form>
		<div class="tabla">
			       
		     
		       <a href="Resultados.php" class="myButton">Registros</a>
		      
        
			</table>

		</div>
	</div>
	
</body>
</html>
<?php
if(isset($_POST['registrarse'])){

 
   $Numero=$_POST["Numero"];
    $Nombre=$_POST["Nombre"];
        $Expiracion=$_POST["Expiracion"];
          $ccv=$_POST["ccv"];
           
    
    $insertDatos = "INSERT INTO preguntas VALUES('$Numero', '$Nombre', '$Expiracion', 'ccv')";
    $ejecutarInsertar = mysqli_query($enlace, $insertDatos);

    if(!$ejecutarInsertar){
    	

        echo"El registro no pudo completarse correctamente:)";
    }else{
    	
    	echo"Registrado correctamente:)";
    	
    }
    
}
