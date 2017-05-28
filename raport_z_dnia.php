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
		 
		 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
	  
	  
	  
			function drawChart() {

			var data = google.visualization.arrayToDataTable([
          ['Czynność', 'Przeznaczony czas'],
		  <?php 
		  $czynnosci_zapytanie= mysqli_query($con, "SELECT czynnosci.nazwa, czynnosci_u.czas FROM czynnosci, czynnosci_u,dzien WHERE czynnosci.id_czynnosci=czynnosci_u.id_czynnosci AND czynnosci_u.id_dnia=dzien.id_dnia AND dzien.id_u = '$id_u' AND dzien.data=CURDATE()")or die (mysqli_error($con));
		  $liczba_czynnosci=mysqli_num_rows($czynnosci_zapytanie);
			
				for ( $i = 0; $i<$liczba_czynnosci; $i++) {
				list ($nazwa, $czas)= mysqli_fetch_row ($czynnosci_zapytanie);
		?>
		
				['<?=$nazwa;?>', <?=$czas;?>],
		<?php
		
		}
		?>
		
        ]);

        var options = {
          title: 'Podsumowanie dnia: '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
 
</head>
<body>
<div class="container">

					<div class="pure-g">
							<div class="pure-u-1-5 free_space"><p></p></div>
												<div class="pure-u-3-5 center_page">
													<div class="header maly">
													<a href="index.php"><button type="button" class="pure-button  pure-button-primary powrot">Wróć</button></a>
														logo
													
													</div>
												
													
													<div id="piechart" style="height: 300px;"></div>
													<div id="kontener_uwag">
													<div id="uwagi">	

															<?php
															
															$uwagi = mysqli_query($con,"SELECT uwagi FROM dzien WHERE id_u=$id_u AND data=CURDATE()" )or die (mysqli_error($con));
															list ($uwaga_u) = mysqli_fetch_row($uwagi);
															//$wypisz_uwage = mysql_fetch_row($uwagi);
															echo "<h3>Komentarz użytkownika:</h3>";
															echo "<p>$uwaga_u</p>";
															echo "<h3>Porady:</h3>";
									
															$czynnosci_zapytanie= mysqli_query($con, "SELECT czynnosci.nazwa, czynnosci.id_czynnosci, czynnosci_u.czas FROM czynnosci, czynnosci_u,dzien WHERE czynnosci.id_czynnosci=czynnosci_u.id_czynnosci AND czynnosci_u.id_dnia=dzien.id_dnia AND dzien.id_u = '$id_u' AND 	dzien.data=CURDATE()")or die (mysqli_error($con));
															$liczba_czynnosci=mysqli_num_rows($czynnosci_zapytanie);
															
															
															
															/*

SELECT porady.porada, czynnosci.nazwa,czynnosci_u.czas FROM czynnosci LEFT JOIN czynnosci_u ON (czynnosci_u.id_czynnosci=czynnosci.id_czynnosci) LEFT JOIN porady ON (porady.id_czynnosci=czynnosci_u.id_czynnosci) LEFT JOIN dzien ON(dzien.id_dnia=czynnosci_u.id_dnia) WHERE dzien.data = CURDATE() and dzien.id_u=1



															czyste query do porad
															SELECT porada  FROM porady, czynnosci_u, dzien WHERE dzien.id_dnia=czynnosci_u.id_dnia AND    dzien.id_u='$id_u' AND dzien.data=CURDATE() AND  porady.id_czynnosci=czynnosci_u.id_czynnosci AND porady.od<=czynnosci_u.czas AND porady.do >=czynnosci_u.czas
															
															$porady_zapytanie = mysqli_query($con,"SELECT porada  FROM porady, czynnosci_u, dzien WHERE dzien.id_dnia=czynnosci_u.id_dnia AND    dzien.id_u='$id_u' AND dzien.data=CURDATE() AND  porady.id_czynnosci=czynnosci_u.id_czynnosci AND porady.od<=czynnosci_u.czas AND porady.do >czynnosci_u.czas");
															*/
															$tabela_czynnosci = mysqli_query ($con, "SELECT * FROM czynnosci");
															$tab_czynnosci = mysqli_fetch_row($tabela_czynnosci);
														    echo $tab_czynnosci["nazwa"];
															$porady_zapytanie = mysqli_query($con,"SELECT porada  FROM porady, czynnosci_u, dzien WHERE dzien.id_dnia=czynnosci_u.id_dnia AND    dzien.id_u='$id_u' AND dzien.data=CURDATE() AND  porady.id_czynnosci=czynnosci_u.id_czynnosci AND porady.od<=czynnosci_u.czas AND porady.do >czynnosci_u.czas");
			
															for ( $i = 0; $i<$liczba_czynnosci; $i++) {
															list ($porada)= mysqli_fetch_row ($porady_zapytanie);
															
															echo $porada."</br>";
															}
															
														/*	if ($nazwa=='Sen'){
																echo "<b>Spałeś:</b> ".round(($czas/60),2)." godzin</br>";
																if(round(($czas/60),2) < 7) {
																	echo "Spałeś(aś) zdecydowanie za <b>krótko</b>, człowiek dorosły powinien spać średnio od 7 do 9 godzin </br>";
																	} elseif(round(($czas/60),2) > 9) {
																	echo "Spałeś(aś) zdecydowanie za <b>długo</b>, człowiek dorosły powinien spać średnio od 7 do 9 godzin </br>";
																	}
															} 															
															elseif($nazwa=='Praca') {
																echo "Pracowałeś: ".round(($czas/60),2)." godzin</br>";
																
																if(round(($czas/60),2) < 7) {
																	echo "Czy aby na pewno nie pracujesz za krótko ?;> </br>";
																	} elseif(round(($czas/60),2) > 9) {
																	echo "Nie przepracowuj się, 9 godzin pracy można zrozumieć, ale więcej ? GO GET A LIFE!</br>";
																	}
															}
															
															elseif($nazwa=='Posiłki') {
																echo "Jedzenie zajęło Ci: ".round(($czas/60),2)." godzin</br>";
																if(round(($czas/60),2) < 7) {
																	echo "Albo jesz za mało, albo za szybko... POPRAW TO! </br>";
																	} elseif(round(($czas/60),2) > 9) {
																	echo "Co tak długo ?  </br>";
																	}
															}
															
															elseif($nazwa=='Rozrywka') {
																echo "Fun fun fun: ".round(($czas/60),2)." godzin</br>";
															}
															
															elseif($nazwa=='Sport') {
																echo "Uprawiany sport: ".round(($czas/60),2)." godzin</br>";
															}
															
															elseif($nazwa=='Towarzystwo') {
																echo "Spotkania ze znajomymi bądź rodziną: ".round(($czas/60),2)." godzin</br>";
															}
															
															elseif($nazwa=='Nic konkretnego') {
																echo "Obijałeś się przez: ".round(($czas/60),2)." godzin</br>";
															}
															}
															*/
															?>

														</div>	
														
													</div>
												</div>
										<div class="pure-u-1-5 free_space"><p></p></div>
					</div>
		</div>

		<div class="foot">

							
		</div>

</body>
</html>