<?php

$czy_wypelniony = mysqli_query($con, "SELECT id_dnia FROM dzien WHERE data=CURDATE() AND id_u=$id_u");


$czy_w = mysqli_num_rows($czy_wypelniony);

?>