

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
			<a href="index.php"><button type="button" class="pure-button  pure-button-primary powrot">Wróć</button></a>
			logo
			
		</div>
		<div class="pure-u-1-4 ">
							<form class="pure-form" action="rejestrowanie_u.php" method="POST">
									
										<input type="text" class="pure-input-1-4" placeholder="Login" name="login">
										<input type="text" class="pure-input-1-4" placeholder="Imię" name="imie">
										<input type="password" class="pure-input-1-4" placeholder="Hasło" name="haslo_pierwsze">
										<input type="password" class="pure-input-1-4" placeholder="Powtórz hasło" name="haslo_drugie">
								
					
									<button type="submit" class="pure-button  pure-button-primary">Zarejestruj</button>
							</form>
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
