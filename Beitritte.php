<?php require("header.php"); ?>
	<div id="content">
		<h1>Beitritte</h1>
		<p>...hier holen wir die Beitrittsdatensätze aus mySQL</p>
	<?php 
		require("LiOST_BD.php"); 
		$db_rc01 = mysqli_query($db_link,"Select Kommentar, Vertrag from beitritte")
			or die("Fehler: ". mysqli_error($db_link));
		while($row = masqli_fetch_array($db_rc01))
		{
			echo ('<p>' . $row[1] . '/<p>');
		}
	?>	
	</div>
	

<?php require("footer.php"); ?>
