<?php
include ('session_spr.php');
$uwagi = $_POST['uwagi'];
$liczba_wierszy= $_POST['liczba_wierszy'];
mysqli_query ($con, "INSERT INTO dzien SET uwagi = '$uwagi',id_u = $id_u, data=CURDATE()")or die(mysqli_error($con));
		
$id_dzien = mysqli_insert_id ($con);
for ($i=0; $i<$liczba_wierszy; $i++ )
	{
		$minuty = $_POST['minuty_'.$i];
		$id_czynnosci = $_POST['id_czynnosci_'.$i];
		mysqli_query($con, "INSERT INTO czynnosci_u(`id_czynnosci`, `id_dnia`, `czas`) VALUES ($id_czynnosci,$id_dzien, $minuty)");
	}

header("Location:podsumowanie_dnia.php");


?>	
