<?php
$login = $_POST['login'];
$imie = $_POST['imie'];
$haslo_pierwsze = $_POST['haslo_pierwsze'];
$haslo_drugie = $_POST['haslo_drugie'];

include ('db.php');

if($login!=''&&$imie!=''&& $haslo_pierwsze==$haslo_drugie && $haslo_pierwsze!='')
{
	$u_zap = mysqli_query($con, "SELECT id_u FROM uzytkownicy WHERE login = '$login'")or die(mysqli_error($con));

	$czy_jest = mysqli_num_rows($u_zap);

	if($czy_jest==0)
	{
		$rejestr_u=mysqli_query($con, "INSERT INTO uzytkownicy SET login = '$login', haslo = '$haslo_drugie', imie = '$imie'");
		?>
		<meta http-equiv="refresh" content="0; url=index.php">
		<?php
		
	}
	else
	{		
	
	echo "taki użytkownik już istnieje";
				?>
							<meta http-equiv="refresh" content="3; url=rejestruj.php">
				<?php
			} 
				
			
	} 

if ($haslo_pierwsze!= $haslo_drugie)	{
				echo "Hasła się różnią";
				?>
							<meta http-equiv="refresh" content="3; url=rejestruj.php">
				<?php
				exit();
			} 
if($login==''||$imie==''||$haslo_pierwsze==''||$haslo_drugie=='') {
				echo "Uzupełnij dane";
				?>
						<meta http-equiv="refresh" content="3; url=rejestruj.php">
				<?php
		}
?>