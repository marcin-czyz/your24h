<?php
$login = $_POST['login'];
$haslo = $_POST['haslo'];

include ('db.php');

if($login!=''&&$haslo!='')
{
	$u_zap = mysqli_query($con, "SELECT id_u FROM uzytkownicy WHERE login = '$login' AND haslo = '$haslo'")or die(mysqli_error($con));


	$czy_jest = mysqli_num_rows($u_zap);

	if($czy_jest==0)
	{
		echo "Nie ma takiego użytkownika.<br>Sprawdź login i hasło!";
		?>
			<meta http-equiv="refresh" content="3; url=index.php">
		<?php
	}
	else
	{
		list($id_u) = mysqli_fetch_row($u_zap);
		session_start();
		$sess_id = session_id();
		
		mysqli_query($con, "DELETE FROM zalogowani WHERE id_u = $id_u")or die(mysqli_error($con));
		
		mysqli_query($con, "INSERT INTO zalogowani SET id_u = $id_u, sess_id = '$sess_id', kiedy = NOW()")or die(mysqli_error($con));
		?>
			<meta http-equiv="refresh" content="0; url=index.php">
		<?php
	}
}
else
{
	echo "Musisz podać login i hasło!";
		?>
			<meta http-equiv="refresh" content="3; url=index.php">
		<?php
}

?>