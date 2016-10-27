<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Star Trek Battles</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
	<header class="site-header">
		<h1 class="page-title"><div id="logo"><img src="assets/images/star-trek-tng-logo.png" alt="Star Trek TNG" /></div></h1>
	</header>
	<section id="select-screen" class="section container">
		<h2 class="section-title" id="title-player">Choose your player</h2>
		<h2 class="section-title noshow" id="title-enemy">Choose your adversary</h2>
		<div id="div-chars" class="div-chars clearfix">
			<div class="char-box" id="human" data-hp="150" data-atk="8" data-def="10">
				<div class="char-image"><img src="assets/images/human.png" alt="USS Enterprise and Capt. Picard" /></div>
				<h3 class="char-name">Human</h3>
				<div class="hp-bar"><div class="hp-fill"></div><span class="hp-num"></span></div>
			</div><!--

			--><div class="char-box" id="klingon" data-hp="180" data-atk="10" data-def="5">
				<div class="char-image"><img src="assets/images/klingon.png" alt="Bird of Prey and Klingon" /></div>
				<h3 class="char-name">Klingon</h3>
				<div class="hp-bar"><div class="hp-fill"></div><span class="hp-num"></span></div>
			</div><!--

			--><div class="char-box" id="cardassian" data-hp="120" data-atk="10" data-def="12">
				<div class="char-image"><img src="assets/images/cardassian.png" alt="Cardassian starship and Cardassian" /></div>
				<h3 class="char-name">Cardassian</h3>
				<div class="hp-bar"><div class="hp-fill"></div><span class="hp-num"></span></div>
			</div><!--

			--><div class="char-box" id="borg" data-hp="220" data-atk="4" data-def="25">
				<div class="char-image"><img src="assets/images/borg.png" alt="Borg cube and Borg drone" /></div>
				<h3 class="char-name">Borg</h3>
				<div class="hp-bar"><div class="hp-fill"></div><span class="hp-num"></span></div>
			</div>
		</div>
	</section>
	<section id="fight" class="section container noshow">
		<h2 class="section-title" id="title-fight">FIGHT!</h2>
		<div id="div-player" class="col-sm-5">
		</div>
		<div class="col-sm-2">
			<button id="btn-fight">ATTACK</button>
		</div>
		<div id="div-enemy" class="col-sm-5">
		</div>
	</section>

	<!-- Call jQuery and game JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/javascript/game.js"></script>

	<!-- Latest compiled and minified JavaScript for Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>