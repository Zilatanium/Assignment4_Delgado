<!DOCTYPE html>
<html>
<head>
	<title>Joe's Feedback</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
</head>
<body>
	<div class="container">
		<div class="center">
		<?php
    
		// To Get the last modification time.
		$last_modification="Last modified: " . date ("F d Y H:i:s.", getlastmod());
		
		// To Show the last modification time.
		echo $last_modification;
		?>
		<div class="space">
			Link to my ThemePark: 
			<a href="http://167.99.253.247/csc443/delgadoj11/Computer-Theme-Park/">http://167.99.253.247/csc443/delgadoj11/Computer-Theme-Park/</a>
		</div>
		<div class="space">
			Team Member's Team Parks: 
            <br/> Aaron - <a href="http://167.99.253.247/csc443/hauserm3/CSC443/theme_park/themepark.php">http://167.99.253.247/csc443/hauserm3/CSC443/theme_park/themepark.php</a>
            <br/> Felix - <a href="http://167.99.253.247/csc443/fernandezf2/CSC-443/Assignment3/">http://167.99.253.247/csc443/fernandezf2/CSC-443/Assignment3/</a>
            <br/> Sam - <a href="http://167.99.253.247/csc443/beebes3/Assignments/3/themepark.php">http://167.99.253.247/csc443/beebes3/Assignments/3/themepark.php</a>
            <br/> Maxwell - <a href="http://167.99.253.247/csc443/delgadoj11/themeParkProposal/">http://167.99.253.247/csc443/delgadoj11/themeParkProposal/</a>
		</div>
		<div class="space">
			<?php
				date_default_timezone_set("America/New_York");
				echo "Today is " .date("m/d/y"), ", with the time of: ".date("h:i:sa"), "."						 ?>
		</div>
		<div class="space">
			This Table below is displayed automatically through PHP functions.
			<?php
				echo "<html><body><table>\n\n";
				$f = fopen("Delgado-Own-Peer-Review.csv", "r");
				while (($line = fgetcsv($f)) !== false) {
						echo "<tr>";
						foreach ($line as $cell) {
								echo "<td>" . htmlspecialchars($cell) . "</td>";
						}
						echo "</tr>\n";
				}
				fclose($f);
				echo "\n</table></body></html>"; ?>
		</div>
		<div class="space">
			Image to be used for ThemePark:
				<img src="themepark-icon.png" alt="test">
		</div>
	</div>
</body>
</html>