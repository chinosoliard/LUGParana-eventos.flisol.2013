<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);	
	include 'conexion.php';
	$dbconection = mysqli_connect($db_host,$db_user,$db_pass,$db_db);
	
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	$query = 'SELECT * FROM attendees';
?>
<head><title>FLISOL 2013 - Lista de Asistentes</title></head>
<body>
CUERPO
<table border="1">
  <tr>
    <th>ID</th>
    <th>NOMBRE</th>
  </tr>
<?php
	if ($result = mysqli_query($dbconection, $query)) {	
	$numero = 1;    
	/* fetch associative array */
	    while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>{$numero}</td><td>{$row['name']}</td></tr>";
		$numero++;
	    }
	    /* free result set */
	    mysqli_free_result($result);
	}
?>
</table> 
<?php	
	/* close connection */
	mysqli_close($dbconection);
?>
</body>
