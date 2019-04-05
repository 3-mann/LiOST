<html>
<head>
        <link href="CSS/TableStyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<title> LiOST-Web: Anzeige der Beitritte </title>
	<div id="content">
		<h1>LiOST-Web: Beitritte der Mitglieder</h1>
		<h3>...hier holen wir die Beitrittsdaten aus der MySQL Datenbank</h3>
	<?php 
		$db_link = mysqli_connect('localhost', 'LiOST_Admin','1.Kuriosum#88' ,'Beitritte'); 
		$result = mysqli_query($db_link,"Select * from beitritte")
			or die("Fehler: ". mysqli_error($db_link));
                $ausgabe = "<table>";
                $z = 0;
		while($fetch = mysqli_fetch_array($result , MYSQLI_NUM))
		{
			$z ++;
                        if ($z == 1)
                        {
                            $ausgabe .= "<thead><tr>";
                            for ($i=0;$i<=count($fetch)-1;$i++)
                            {
                                $ausgabe .= "<th>" . mysqli_fetch_field_direct($result,$i)->name . "</th>";
                            }
                            $ausgabe .= "</tr></thead>";
                        }
                        $ausgabe .= "<tfoot><tr>";
                        for ($i=0; $i<=count($fetch)-1;$i++)
                        {
                            $ausgabe .= "<td>" . $fetch[$i] . "</td>";
                        }
                        $ausgabe .= "</tr></tfoot>";
                }
                $ausgabe .= "</table>";
                echo $ausgabe;
	?>	
	</div>
</body>
</html>
