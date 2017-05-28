<?php
include ('session_spr.php');
if($id_u>0)
{
	mysqli_query($con, "DELETE FROM zalogowani WHERE id_u = $id_u AND sess_id='$sess_id' ")or die(mysqli_error($con));

	?>
		<meta http-equiv="refresh" content="0; url=index.php">
	<?php
}

?>