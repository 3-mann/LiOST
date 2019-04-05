<html>
<head>
</head>
<body>
	<title> LiOST-Web: Anzeige der Beitritte </title>
	<div id="content">
		<h1>LiOST-Web: Beitritte der Mitglieder</h1>
		<h3>...hier holen wir die Beitrittsdaten aus der MySQL Datenbank</h3>
	<?php 
		$db_link = mysqli_connect('localhost', 'combit','' ,'Beitritte'); 
		$db_rc01 = mysqli_query($db_link,"Select * from beitritte")
			or die("Fehler: ". mysqli_error($db_link));
                $ausgabe = "<table>";
                $z = 0;
		while($row = mysqli_fetch_array($db_rc01 , MYSQL_NUM))
		{
			$z ++;
                        if ($z == 1)
                        {
                            $ausgabe .= "<tr>";
                            for ($i=0;$i<=count($fetch)-1;$i++)
                            {
                                $ausgabe .= "<th>" . mysql_field_name($result,$i) . "</th>";
                            }
                            $ausgabe .= "</tr>";
                        }
                        $ausgabe .= "<tr>";
                        for ($i=0; $i<=count($fetch)-1;$i++)
                        {
                            $ausgabe .= "<td>" . $fetch($i) . "</td>";
                        }
                        $ausgabe .= "<tr>";
                }
                $ausgabe .= "</table>";
                echo $ausgabe;
	?>	
	</div>
</body>
</html>
