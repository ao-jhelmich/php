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
					<h3>Onkunde</h3>
						<p>Er zijn veel mensen die niet kunnen <?php echo $_POST["kunnen"]; ?>. Neem nou <?php echo $_POST["persoon"]; ?>. 
						Zelfs met de hulp van een <?php echo $_POST["vakantie"]; ?> of zelfs <?php echo $_POST["getal"]; ?> kan <?php echo $_POST["persoon"]; ?> niet <?php echo $_POST["kunnen"]; ?>. 
						Dat heeft niet te maken met een gebrek aan <?php echo $_POST["Beigenschap"]; ?>, maar met een te veel aan <?php echo $_POST["Seigenschap"]; ?>. 
						Te veel <?php echo $_POST["Seigenschap"]; ?> leidt tot <?php echo $_POST["overkomen"]; ?> en dat is niet goed als je wilt <?php echo $_POST["kunnen"]; ?>. 
						Helaas voor <?php echo $_POST["persoon"]; ?>.</p>
		</div>
		<h4>Made by Jasper Helmich</h4>
	</div>
</body>
</html>