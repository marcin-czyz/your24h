<?php

$sess_id = session_id();
if(empty($sess_id))
{
	session_start();
	$sess_id = session_id();
}

include ('db.php');
$sess_zap = mysqli_query($con, "SELECT uzytkownicy.id_u, uzytkownicy.imie FROM uzytkownicy, zalogowani WHERE uzytkownicy.id_u = zalogowani.id_u AND zalogowani.sess_id = '$sess_id'")or die(mysqli_error($con));

$czy_zalogowany = mysqli_num_rows($sess_zap);

if($czy_zalogowany==0)
{
	
	?>
		<meta http-equiv="refresh" content="0; url=logowanie.php">
	<?php
	die;
}
else
{
	list($id_u, $imie) = mysqli_fetch_row($sess_zap);
}


?>