

<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">
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
		<div class="header">
			logo
		</div>
	


				<div class="pole_formularza">
							<form class="pure-form" action="loguj.php" method="POST">
									
										<input type="text" placeholder="Login" name="login">
										<input type="password"  placeholder="Hasło" name="haslo">

								

									<button type="submit" class="pure-button  pure-button-primary">Zaloguj</button>
								</form>
								
								<br>lub jeśli nie masz konta, <a href="rejestruj.php"> zarejestruj się</a>
				</div>		
			
	</div>
    <div class="pure-u-1-5 free_space"><p></p></div>
</div>


</div>


<div class="foot">

					by M Czyż
	</div>

</body>
</html>
