<?php
	include ('session_spr.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
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
<div class="container">

<div class="pure-g">
		<div class="pure-u-1-5 free_space"><p></p></div>
							<div class="pure-u-3-5 center_page">
								<div class="header maly">
									logo
							
								</div>
							<?php
							echo "TU:$czy_zalogowany";
							echo "Dziś jest: xXx <br>";
							include ('info_zalogowany.php');
							?>
							
							<div class="pure-u-1-2 main_button">
							
								<button class="button-success pure-button my_buttons">Podsumowanie dnia</button>
								<button class="button-success pure-button my_buttons">Raport</button>
							
							</div>
							
							<div class="pure-u-1-2 main_button">
							<button class="button-success pure-button my_buttons">Historia</button>
							<a href="wyloguj.php?id_u=<?=$id_u;?>"><button class="button-warning pure-button my_buttons">Wyloguj</button></a>
							</div>
							
							
										
									
							</div>
			<div class="pure-u-1-5 free_space"><p></p></div>
		</div>


</div>

<div class="foot">

					by Marcin Czyż
	</div>

</body>
</html>
