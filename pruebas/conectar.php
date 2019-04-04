<?php
$databasehost = 'mysql';
$databasename = 'oswa_inv';
$databaseuser = 'openshift';
$databasepass = 'openshift';

$mysqli = mysqli_connect($databasehost, $databaseuser, $databasepass, $databasename);
if (!$mysqli){
	die("problemas de conexión PHP");
}
?>
