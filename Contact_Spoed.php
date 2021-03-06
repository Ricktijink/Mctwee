﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC2 - In geval van spoed</title>
	<meta name="author" content="Rick Tijink" />
	<meta name="description" content="Misschien zit je nu ziek thuis? Bij MC2 zijn we gespecialiseerd in Arbeid en Gezondheid, zowel arbeidsgerelateerde- als arbeidrelevante klachten." />
	<meta name="keywords"  content="Website, Logo, Code, Animation, Design, Animation" />
	<meta name="Resource-type" content="Document" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="CSS/main.css" />

	<!-- Javascript library & Custom code -->
	<script type="text/javascript" src="JS/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="JS/custom.js"></script>
</head>

<body>
	<div id="landscape-block"><div id="smalllogo"><img src="IMG/logo.png" alt="over" width="160" height="47"></div><h1>Voor de beste mobiele ervaring is deze website alleen in portret modus te bekijken</h1></div>
	<!-- Google Analytics -->
	<?php include_once("analyticstracking.php") ?>
	<!-- Logo -->
	<div id="logo">
		<a href="index.php"><img src="IMG/logo_white2.png" alt="over" width="160" height="47"></a>
	</div>
	<!-- Menu overlay (Left part) -->
	<div class="menu_overlay_left"></div>
	<!-- Menu overlay (Right part) -->
	<div class="menu_overlay_right">
		<!-- Menu overlay (Left part) -->
		<div id="menu_container">
			<!-- Exit menu button -->
			<div id="close_menu">X</div>
			<!-- Menu left side -->
			<div id="menu_left">
				<span class="testy">Menu</span>
				<div class="divideline">---</div>
				<ul>
					<li><a href="OverMC2.php">Over MC<sup>2</sup></a></li>
					<li class="indent"><a href="Psychologie.php">Psychologie</a></li>
					<li class="indent"><a href="Fysiotherapie.php">Fysiotherapie</a></li>
					<li class="indent"><a href="Reintegratie.php"><strong>Reïntegratie</strong></a></li>
					<li><a href="Kwaliteit.php">Kwaliteit</a></li>
					<li><a href="HetTeam.php">Het Team</a></li>
					<li><a href="Nieuws.php">Nieuws</a></li>
					<li><a href="Media.php">Media</a></li>
					<li><a href="Contact.php">Contact</a></li>
				</ul>
			</div>
			<!-- Menu right side -->
			<div id="menu_right">
				<?php include 'inc_menu.php'; ?>
			</div>
		</div>
	</div>
	<!-- TopRight Menu button -->
	<div id="menu_button" class="red">
		<img src="IMG/menu2.png" alt="over" width="73" height="68">
	</div>
	<!-- Left container - Blue -->
	<div id="left_container" class="red_container">
		<div id="mobile_menu_button">
			<a href="index.php"><img src="IMG/mob_menu.png" alt="Mobile menu"></a>
		</div>
		<!-- Intro page -->
		<div id="intro_block">
			<h1 class="main_title editable">Contact</h1><br/>
			<span class="main_subtitle editable">Spoed</span>
		</div>
	</div>
	<!-- Right container - Blue -->
	<div id="right_container">
		<!-- Content container -->
		<div id="content_container">
			<div class="block_big">
				<div class="block_title">
					<h1 class="title_red editable">In geval van spoed</h1>
					<span class="subtitle editable">Dit is wat u kunt doen:</span>
				</div>
				<div class="big_content">
					<div class="big_content_text editable">
						<p class="standard_text">
							<strong>Tijdens kantooruren:</strong>
							<br/>
							MC<sup>2</sup> is goed bereikbaar tijdens kantooruren (van 08.30u-17.00u). Er is dan altijd iemand aanwezig die u te woord kan staan. Onverhoopt kan het zijn dat door drukte de telefoon niet opgenomen wordt, waarbij –in dat geval- geadviseerd wordt in te spreken op het antwoordapparaat en te vragen om terug gebeld te worden.

							In geval van nood/spoed wordt direct overleg gepleegd en vaak wordt in dat geval de cliënt diezelfde dag nog gezien op spreekuur bij een van de therapeuten en/of overlegd de huisarts te informeren en te bespreken wat de alternatieven zijn qua passende hulp (bv. het voorschrijven van medicatie of te overleggen met crisisdienst GGZ).
						</p><br/><br/>
						<p class="standard_text">
							<strong>Buiten kantooruren:</strong>
							<br/>
							MC<sup>2</sup> is dan slechts bereikbaar via antwoordapparaat en/of mail. Graag horen wij wat er aan de hand is, zodat wij, zo spoedig dat we het bericht horen of zien, contact met je leggen en met je kunnen overleggen.
							Omdat spoedvragen vaak niet kunnen wachten zal hulp uit een andere hoek moeten komen. Afgesproken wordt met cliënten dat zij zich wenden naar eigen huisarts of huisartsenpost (bv. in het weekend of in de avonduren) die veelal kunnen inspringen in noodlijdende situaties. Met de huisarts en/of huisartsenpost zou ook het crisisteam GGZ kunnen worden overlegd.

							Dit “spoed-protocol” wordt met cliënt als onderdeel van zijn behandelplan besproken en vastgelegd. Tevens wordt in het behandelplan/sessie-afspraken verwezen naar de site, waarop deze informatie te vinden is.
						</p>
					</div>
				</div>
				<!-- button -->
				<a class="button_red" href="Contact.php">Terug</a>
			</div>
			<div class="break"></div>
		</div>
		<!-- Footer -->
		<div class="footer">
			<?php include 'inc_footer.php'; ?>
		</div>
	</div>
</body>
</html>
