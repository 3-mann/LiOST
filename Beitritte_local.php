<html>
<head>
    <link href="CSS/TableStyle.css" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<title> LiOST-Web: Anzeige der Beitritte </title>
	<div id="content">
		<h1>LiOST-Web: Beitritte der Mitglieder</h1>
		<h3>...hier holen wir die Beitrittsdaten aus der MySQL Datenbank</h3>
	<?php 
		$db_link = mysqli_connect('localhost', 'combit','1.Kuriosum#88' ,'Beitritte'); 
		$result = mysqli_query($db_link,"Select * from beitritte")
			or die("Fehler: ". mysqli_error($db_link));
                $ausgabe = "<table>";
                $z = 0;
		while($fetch = mysqli_fetch_array($result , MYSQLI_NUM))
		{
			$z ++;
                        if ($z == 1)
                        {
                            $fieldName = "";
                            $ausgabe .= "<tr>";
                            for ($i=0;$i<=count($fetch)-1;$i++)
                            {   
                                $fieldName = mysqli_fetch_field_direct($result,$i)->name;
                                IF( $fieldName == "Beitritt" )
                                {
                                    $inputCol = $z+1;
                                }
                                $ausgabe .= "<th>" . $fieldName . "</th>";
                            }
                            $ausgabe .= "</tr>";
                        }
                        $ausgabe .= "<tr>";
                        for ($i=0; $i<=count($fetch)-1;$i++)
                        {
                            IF ($i == $inputCol)
                            {
                            $ausgabe .= '<td>' . '<input type="checkbox" Value = ' . TRUE . '></td>';
                            }
                            IF ($i !== $inputCol)
                            {
                            $ausgabe .= "<td>" . $fetch[$i] . "</td>";
                            }
                        }
                        $ausgabe .= "</tr>";
                }
                $ausgabe .= "</table>";
                echo $ausgabe;
	?>	
	</div>
</body>
</html>
