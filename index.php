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
		<div class="container">
			<h1 class="page-title"><div id="logo"><img src="assets/images/star-trek-tng-logo.png" alt="Star Trek TNG" /></div></h1>
		</div>
	</header>
	<section id="select-screen" class="section container">
		<h2 class="section-title" id="title-player">Choose your player</h2>
		<h2 class="section-title noshow" id="title-enemy">Choose your adversary</h2>
		<div id="div-chars" class="div-chars row">
			<div class="char-box" id="human" data-hp="150" data-atk="8" data-def="12">
				<div class="char-win noshow">
					<h3 class="quote"><q>The line must be drawn here! This far, no farther!</q></h3>
				</div>
				<div class="char-lose noshow">
					<h3 class="quote"><q>It is possible to commit no mistakes and still lose. That is not a weakness; that is life.</q></h3>
				</div>
				<div class="char-image"><img src="assets/images/human.png" alt="USS Enterprise and Capt. Picard" /></div>
				<h3 class="char-name">Human</h3>
				<div class="hp-bar"><div class="hp-fill"></div><span class="hp-text"></span></div>
			</div><!--

			--><div class="char-box" id="klingon" data-hp="160" data-atk="10" data-def="8">
				<div class="char-win noshow">
					<h3 class="quote"><q>potlhbe’chugh yay qatlh pe’’eghlu’.</q></h3>
					<h4 class="translate">If winning is not important, why keep score?</h4>
				</div>
				<div class="char-lose noshow">
					<h3 class="quote"><q>Heghlu'meH QaQ jajvam</q></h3>
					<h4 class="translate">Perhaps it is a good day to die.</h4>
				</div>
				<div class="char-image"><img src="assets/images/klingon.png" alt="Bird of Prey and Klingon" /></div>
				<h3 class="char-name">Klingon</h3>
				<div class="hp-bar"><div class="hp-fill"></div><span class="hp-text"></span></div>
			</div><!--

			--><div class="char-box" id="cardassian" data-hp="120" data-atk="10" data-def="15">
				<div class="char-win noshow">
					<h3 class="quote"><q>I hope you realize the consequences of Federation officers firing on Cardassian troops!</q></h3>
				</div>
				<div class="char-lose noshow">
					<h3 class="quote"><q>Wasted energy, captain. You might come to wish you hadn't expended it in such a futile effort.</q></h3>
				</div>
				<div class="char-image"><img src="assets/images/cardassian.png" alt="Cardassian starship and Cardassian" /></div>
				<h3 class="char-name">Cardassian</h3>
				<div class="hp-bar"><div class="hp-fill"></div><span class="hp-text"></span></div>
			</div><!--

			--><div class="char-box" id="borg" data-hp="180" data-atk="3" data-def="20">
				<div class="char-win noshow">
					<h3 class="quote"><q>We are Borg. Resistance is futile.</q></h3>
				</div>
				<div class="char-lose noshow">
					<h3 class="quote"><q>You can't begin to imagine the life you denied yourself.</q></h3>
				</div>
				<div class="char-image"><img src="assets/images/borg.png" alt="Borg cube and Borg drone" /></div>
				<h3 class="char-name">Borg</h3>
				<div class="hp-bar"><div class="hp-fill"></div><span class="hp-text"></span></div>
			</div>
		</div>
	</section>
	<section id="fight-screen" class="section container noshow">
		<h2 class="section-title" id="title-fight">FIGHT!</h2>
		<div class="row row-sm-eq-height">
			<div id="div-player" class="col-sm-4 col-md-5">
			</div>
			<div class="col-sm-4 col-md-2 vcenter">
				<button id="btn-fight" class="game-btn">ATTACK</button>
			</div>
			<div id="div-enemy" class="col-sm-4 col-md-5">
			</div>
		</div>
	</section>
	<section id="win-screen" class="section container noshow">
		<h2 class="section-title" id="title-fight">YOU WIN!</h2>
		<div id="player-win" class="game-end"></div>
		<button class="btn-refresh game-btn">Play again?</button>
	</section>
	<section id="lose-screen" class="section container noshow">
		<h2 class="section-title" id="title-fight">YOU LOSE!</h2>
		<div id="player-lose" class="game-end"></div>
		<button class="btn-refresh game-btn">Try again?</button>
	</section>

	<!-- Call jQuery and game JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/javascript/game.js"></script>

	<!-- Latest compiled and minified JavaScript for Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>