<!DOCTYPE html>
<html>
<head>
	<title>Mad Lips</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta charset="utf-8">
</head>
<body>
		<div class="main">
			<h1>mad lips</h1>
				<div class="menu">
				<ul>
					<li><a href="../index.php">Er heerst paniek...</a></li>
					<li><a href="onkunde.php">Onkunde</a></li>
				</ul>
				</div>
		<div class="content">
			<div class="vragen">
				<h3>Er heerst paniek...</h3>
					<p>Er heerst paniek in het koninkrijk <?php echo $_POST["land"]; ?>. 
					Koning <?php echo $_POST["persoon"]; ?> is ten einde raad en als koning <?php echo $_POST["persoon"]; ?> ten einde raad is, 
					dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["spijbelen"]; ?>.</p>
					<p>"<?php echo $_POST["spijbelen"]; ?>! Het is een ramp! Het is een schande!"</p> 
					<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
					<p>"Mijn  <?php echo $_POST["huisdier"]; ?>  is verdwenen! Zo maar, zonder waarschuwing.
					En ik had net  <?php echo $_POST["kopen"]; ?> voor hem gekocht!"</p> 
					<p>"Majesteit, uw <?php echo $_POST["huisdier"]; ?> komt vast vanzelf weer terug?"</p>
					<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd<?php echo $_POST["bezigheid"]; ?> leren?"</p>
					<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["speelgoed"]; ?> voor gebruiken."</p>
					<p>"<?php echo $_POST["persoon"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
					<p>"<?php echo $_POST["verveling"]; ?>, Sire."</p>



					</div>	
					<h4>Made by Jasper Helmich</h4>
		</div>
	</div>
</body>
</html>