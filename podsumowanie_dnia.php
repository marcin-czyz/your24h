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
											
													<?php
													if ($czy_w == 0){
													//echo "jest dobrze, leć dalej";
													
													?>
													<h4>Do dyspozycji:
													<span id="zostalo">1440</span>
													minut</h4>
													<span id="test"></span>
												
													<form name="formularz" action="zapis_komentarza.php" method="post">
														<?php
															
															$czynnosci_zap = mysqli_query($con, "SELECT id_czynnosci,nazwa FROM czynnosci")or die (mysqli_error($con));
															
																$liczba_czynnosci=mysqli_num_rows($czynnosci_zap);
															echo "<table class='tabela_czasow'>";
															echo "<tr>";
																for ( $i = 0; $i<$liczba_czynnosci; $i++) 
															{
																list ($id_czynnosci, $nazwa)= mysqli_fetch_row ($czynnosci_zap);
																echo "<tr><td>$nazwa <input type=\"hidden\" name=\"id_czynnosci_$i\" value=\"$id_czynnosci\"></td><td><input class=\"min\" type=\"number\" min=\"0\" name=\"minuty_$i\" onInput=\"licz_minuty(this)\"></br></td></tr>";
															}
															echo "</tr>";
															echo "</table>";
														?>	
													<textarea rows="2" cols="20" name="uwagi"></textarea>
													<input type="hidden" name="liczba_wierszy" value="<?=$liczba_czynnosci;?>">
																								<input id="send" class="pure-button" style="display:none;" type="submit" value="Zakończ">	
													</form>
												
											<?php
													} else { ?>
													 <div class="wow">
              <h1> Uzupełniłeś(aś) już swój dzisiejszy dzień </h1></br>
				<p>Przejdź do pełnego raportu tędy </p>

			  	<div class="blue">
  <div class="icon"><img src="https://image.flaticon.com/icons/svg/275/275119.svg" width="50" style="margin-top:300px" class="bounce"></div>
	</div>
                </div>
												<?php
												}
												?>
											
								</div>
						<div class="pure-u-1-5 free_space"><p></p></div>
					</div>
	
		<div class="foot">
								<div>
								<?php
									if ($czy_w != 0){
									//echo "jest dobrze, leć dalej";
													
								
									echo "<a href='raport_z_dnia.php'><button type='button' class='pure-button pure-button-primary pure-u-3-5'>Zobacz raport</button></a>";
									
													} else 
													{
													
												}
												
										?>
								</div>
		</div>
		
		<script>
			function licz_minuty(pole) {
				
				var zostalo = 1440;
				
				var tabMin  = document.getElementsByClassName("min");
				
				//document.getElementById("test").innerHTML = tabMin.length;
				
				var liczbaPol = tabMin.length;
				
				var sumaMin=0;
					
				for(var i=0; i<liczbaPol; i++)
				{
					sumaMin = (sumaMin*1) + (tabMin[i].value*1);
					
				}				
				var wynik_odejmowania = zostalo - sumaMin;
				
				if (wynik_odejmowania<0)
				{
					wynik_odejmowania=wynik_odejmowania+(pole.value*1);
					pole.value=0;
					alert ("Dzień jest dla Ciebie za krótki ;)");	
					//var wartosc_pola = tabMin[i].value*1;
					//min.value=0;
					//tabMin[i].value=0;
				}
				document.getElementById('zostalo').innerHTML= wynik_odejmowania;
				
				if (wynik_odejmowania==0){
					document.getElementById('send').style.display="inline";
				}
				else {
					document.getElementById('send').style.display="none";
				}				
			}
			
		</script>
</body>
</html>
