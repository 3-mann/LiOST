<html>
<head>
</head>
<body>
	<title> LiOST-Web: Anzeige der Beitritte </title>
	<div id="content">
		<h1>LiOST-Web: Beitritte der Mitglieder</h1>
		<h3>...hier holen wir die Beitrittsdaten aus der MySQL Datenbank</h3>
	<?php 
		$db_link = mysqli_connect('localhost', 'combit','' ,'beitritte'); 
		$db_rc01 = mysqli_query($db_link,"Select * from beitritte")
			or die("Fehler: ". mysqli_error($db_link));
		while($row = mysqli_fetch_array($db_rc01))
		{
			echo('<tr>');
			echo ('<td>' . $row['Kommentar'] . ' | /<td>');
			echo ('<td>' . $row['Beitritt'] . ' | /<td>');
			echo ('<td>' . $row['Beitrittsdatum'] . ' | /<td>');
			echo ('<td>' . $row['Beitrittsende'] . ' | /<td>');
			echo ('<td>' . $row['Vertrag'] . ' | /<td>');
			echo ('<td>' . $row['Gruppe'] . ' | /<td>');
			echo ('<td>' . $row['KK_Name'] . ' | /<td>');
			echo ('<td>' . $row['KK_Ort'] . ' | /<td> </br>');
			echo('</tr>');
		}
	?>	
	</div>
</body>
</html>

