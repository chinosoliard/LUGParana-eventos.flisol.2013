<?php

include 'conexion.php';

$con = mysqli_connect($db_host,$db_user,$db_pass,$db_db);

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  die();
}

if(empty($_POST)){
	die();
}

if(!empty($_POST['name'])){
	$name = mysqli_real_escape_string($con, $_POST['name']);
}
else {
	$name = '';
}

if(!empty($_POST['email'])){
	$email = mysqli_real_escape_string($con, $_POST['email']);
}
else {
	$email = '';
}

if(!empty($_POST['instala'])){
	$instala = mysqli_real_escape_string($con, $_POST['instala']);
}
else {
	$instala = 0;
}

$q = 'INSERT INTO attendees (name, email, instala) 
VALUES ("'.$name.'","'.$email.'","'.$instala.'")';
mysqli_query($con, $q);

mail ($email, 'Pre-acreditación FLISOL-Paraná', ''.$name.',
   Gracias por pre-acreditarte a FLISOL 2013 Paraná.
   Esperamos disfrutes el evento.

Saludos.

Soliard, Adrian D.
Coordinador Flisol 2013 Sede Paraná',
'From: Flisol PARANA');

mail ('a.soliard@gmail.com', 'Nueva Pre-acreditación FLISOL-Paraná', 'Nueva acreditación a FLISOL 2013 Parana: 
Nombre: '.$name.'
Email: '.$email.'
Instala: '.$instala.'
',
'From: Flisol PARANA');
echo "true";
?>
