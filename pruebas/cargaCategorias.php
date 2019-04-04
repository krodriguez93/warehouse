<?php
header('Content-type: application/json');
        header("Access-Control-Allow-Origin: *");
        ob_end_flush();
include_once("conectar.php");
$cantidadCategorias = $_REQUEST["id"];

$sqldel="delete from categories where 1=1";

if (mysqli_query($mysqli, $sqldel)) {
      echo "Delete records". "\n";	  
		} else {
      echo "Error: " . $sqldel . "<br>" . mysqli_error($mysqli);
		}

$tiempo_inicial = microtime(true);
for ($categoria = 1; $categoria < $cantidadCategorias; $categoria++){
	
	$sql="INSERT INTO categories(name) VALUES ('".$categoria."123456')";
	

	if (mysqli_query($mysqli, $sql)) {
		echo " - ";
      echo "New record created successfully" . "\n";
		} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
		}
}//end for
$tiempo_final = microtime(true);
	
$tiempo = $tiempo_final - $tiempo_inicial;

echo "El tiempo de ejecución del archivo ha sido de " . $tiempo . " segundos";




mysqli_close($mysqli);

 

?>

