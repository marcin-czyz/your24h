<?php
	include ('session_spr.php');
	include ('czy_wypelniony.php');
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Test">
    <title>Your24h PHP - understand your everyday life!</title>
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">
    <!--<![endif]-->
    
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="css/layouts/marketing.css">
        <!--<![endif]-->
		 <link rel="stylesheet" href="css/my.css"> <!-- my own css styles !-->
</head>
<body>
<div class="container podsumowanie">
					<div class="pure-g">
							<div class="pure-u-1-5 free_space"><p></p></div>
								<div class="pure-u-3-5 center_page">
									<div class="header maly">
										<a href="index.php"><button type="button" class="pure-button  pure-button-primary powrot">Wróć</button></a>
											logo
												</div>	<?php
													//$czas_zap= mysqli_query($con, "SELECT SUM(czynnosci_u.czas) FROM czynnosci_u, dzien WHERE //czynnosci_u.id_dnia = dzien.id_dnia AND dzien.data = CURDATE() AND dzien.id_u =$id_u") or //die(mysqli_error($con));   
													//do historii lub raportow !!!!
												?>
												
								<form action="z_ilu_dni.php" method="post" class="alone">
								
								<label>Z ilu dni ?</label><input type="number" name="ilosc_dni">
								<input type="submit" value="Potwierdź">
								
							
								</form>
								</div>
						<div class="pure-u-1-5 free_space"><p></p></div>
					</div>
</div>
		<div class="foot">
								<div>
								by Czyż
								</div>
		</div>
		
		
</body>
</html>
