<?php
$login = $_POST['login'];
$haslo = $_POST['haslo'];

include ('db.php');

if($login!=''&&$haslo!='')
{
	$admin_zap = mysqli_query($con, "SELECT id_u FROM uzytkownicy WHERE login = '$login' AND haslo = '$haslo'")or die(mysqli_error($con));


	$czy_jest = mysqli_num_rows($admin_zap);

	if($czy_jest==0)
	{
		echo "Nie ma takiego admina.<br>Sprawdź login i hasło!";
		?>
			<meta http-equiv="refresh" content="3; url=logowanie.php">
		<?php
	}
	else
	{
		list($id_admina) = mysqli_fetch_row($admin_zap);
		session_start();
		$sess_id = session_id();
		
		mysqli_query($con, "DELETE FROM zalogowani WHERE id_u = $id_admina")or die(mysqli_error($con));
		
		mysqli_query($con, "INSERT INTO zalogowani SET id_u = $id_admina, id_sesji = '$sess_id', kiedy = NOW()")or die(mysqli_error($con));
		?>
			<meta http-equiv="refresh" content="0; url=index.php">
		<?php
	}
}
else
{
	echo "Musisz podać login i hasło!";
		?>
			<meta http-equiv="refresh" content="3; url=logowanie.php">
		<?php
}

?>