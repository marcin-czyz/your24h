<?php
	include ('session_spr.php');
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
												</div>	

												
												
												<div >
											<?php

											$spis_zap = mysqli_query ($con, "SELECT data, id_dnia FROM dzien WHERE dzien.id_u=$id_u ORDER BY data DESC")or die (mysqli_error($con));
											$spis = mysqli_num_rows($spis_zap);
											
											echo "<h3>Twoja historia:</h3>";
											?>
											<div id="lista_hist">
											<?php
											for ( $i = 0; $i<$spis; $i++) 
															{
																list ($data, $id_dnia)= mysqli_fetch_row ($spis_zap);
																echo "<a href='dzien_z_archiwum.php?data=$data;'><div class='pozycja_histori'>$data</div></a>";
																
															
															}
											?>
											
											</div>
													
											</div>
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