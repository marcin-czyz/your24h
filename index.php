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
<div class="container">

<div class="pure-g">
		<div class="pure-u-1-5 free_space"><p></p></div>
							<div class="pure-u-3-5 center_page">
								<div class="header maly">
									<img src="logo.png"></img>
							
								</div>
							<div>
							<?php
							$data=date("Y-m-d");
							echo "Dziś jest: <b>$data</b> <br>";
							echo "Powodzenia <b>".$imie."</b>";
							
							?>
							</div>
							<div class="pure-u-1-2">
							
									<?php
													if ($czy_w == 0){
													//echo "jest dobrze, leć dalej";
									?>
													<a href="podsumowanie_dnia.php"><div class=" my_buttons niewypelniony">Podsumowanie dnia</div></a>
													<?php
													} else {?>
													<a href="podsumowanie_dnia.php"><div class="my_buttons">Podsumowanie dnia</div></a>
													<?php 
													}
													?>
							<a href="raport.php">	<div class="my_buttons">Raport</div></a>
							
							</div>
							
							<div class="pure-u-1-2">
							<a href="historia.php"><div class="my_buttons">Historia</div></a>
							<a href="wyloguj.php?id_u=<?=$id_u;?>"><div class=" my_buttons logout">Wyloguj</div></a>
							</div>
							
							
										
									
							</div>
			<div class="pure-u-1-5 free_space"><p></p></div>
		</div>


</div>

<div class="foot">
					footer
</div>

</body>
</html>
