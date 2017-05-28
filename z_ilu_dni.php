<?php
$ilosc_dni = $_POST['ilosc_dni'];

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
		  $czynnosci_zapytanie= mysqli_query($con, "SELECT czynnosci.nazwa, SUM(czynnosci_u.czas) FROM czynnosci, czynnosci_u,dzien WHERE czynnosci.id_czynnosci=czynnosci_u.id_czynnosci AND czynnosci_u.id_dnia=dzien.id_dnia AND dzien.id_u = '$id_u' AND dzien.data <= CURDATE() AND dzien.data>= DATE_SUB(CURDATE(),INTERVAL $ilosc_dni DAY) GROUP BY czynnosci.nazwa")or die (mysqli_error($con));
		  $liczba_czynnosci=mysqli_num_rows($czynnosci_zapytanie);
			
				for ( $i = 0; $i<$liczba_czynnosci; $i++) {
				list ($nazwa, $czas)= mysqli_fetch_row ($czynnosci_zapytanie);
		?>
		
				['<?=$nazwa;?>', <?=$czas/($ilosc_dni+1);?>],
		<?php
		
		}
		?>
		
        ]);

        var options = {
          title: 'Raport: '
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

														<div id="porady">	
														<?php
														//$porady_zap = mysqli_query($con 'SELECT ')
														echo "pole na porady";
														?>
														
														
														 
														</div>
													
												</div>
										<div class="pure-u-1-5 free_space"><p></p></div>
					
					</div>
		</div>

		<div class="foot">

								
		</div>

</body>
</html>