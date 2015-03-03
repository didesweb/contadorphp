<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Didesweb, contador de visitas</title>
	<!-- Didesweb -->  
	<!-- Diseño y desarrollo web -->  
	<!-- http://didesweb.com/-->  
	<!-- Este obra está protegida bajo licencia Creative Commons Attribution --> 
</head>
<body>
<h1>Didesweb, contador de visitas</h1>
<?php 
 $archivo_almacen = "contadordevisitas.txt";
 $abrirarchivo = fopen($archivo_almacen, "r");
 $cuenta = fread($abrirarchivo, filesize($archivo_almacen));
 fclose($abrirarchivo);
 $abrirarchivo = fopen($archivo_almacen, "w");
 $cuenta = $cuenta + 1;
 $reescribir = fwrite($abrirarchivo, $cuenta);
 fclose($abrirarchivo);
 echo "<p>Este manual ha sido visitado"." ".$cuenta." "."veces."."</p>";
 ?> 
</body>
</html>
