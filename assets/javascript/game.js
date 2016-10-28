$(function(){

	/* Instantiate global vars */
	var player, enemy;
	var fadeTime = 800;

	/* Initiate HP bars */
	$('.hp-bar').each(function(){
		var hp = $(this).parent().data('hp');
		$(this).find('span').html(hp + ' HP');
	});

	/* Create character class */
	var Character = function(id, hp, atk, def, win, lose){
		this.id = id;
		this.currentHp = hp;
		this.totalHp = hp;
		this.baseAttack = atk;
		this.currentAttack = atk;
		this.counterAttack = def;
	}
	/* Character takes a hit */
	Character.prototype.fight = function() {
		// Temporarily disable button
		$('#btn-fight').prop('disabled', true).addClass('disabled');

		this.currentHp -= enemy.counterAttack;
		enemy.currentHp -= this.currentAttack;
		this.currentAttack += this.baseAttack;

		// Update HP display
		this.updateHp();
		enemy.updateHp();

		// End fight if either HP <= 0
		if(this.currentHp <= 0){
			// Game over!
			showLose();
		}else if(enemy.currentHp <= 0){
			// Check for other enemies
			hasEnemy = $('#select-screen .char-box').length;

			if(hasEnemy){ // There are more enemies
				// Empty enemy variable
				enemy = null;
				// Select another enemy
				showEnemies();
			}else{ // You win!
				showWin();
			}
		}else{
			// Still fighting. Re-enable the fight button.
			$('#btn-fight').prop('disabled', false).removeClass('disabled'); 
		}
	}

	/* Update the HP bar */
	Character.prototype.updateHp = function(){
		var hpText = this.currentHp + ' / ' + this.totalHp + ' HP';
		var hpFill = this.currentHp / this.totalHp * 100 + '%';

		$('#'+this.id).find('.hp-text').html(hpText);
		$('#'+this.id).find('.hp-fill').width(hpFill);
		
		// Die if HP <= 0
		if(this.currentHp <= 0){
			this.lose();
		}
	}

	/* Character die */
	Character.prototype.lose = function(){
		$('#'+this.id).addClass('dead');
	}


	// The function to assign data to a new Character
	function selectChar(id){
		char = $('#'+id);
		charObj = new Character(
			id,
			char.data('hp'),
			char.data('atk'),
			char.data('def'),
			char.find('.win-text'),
			char.find('.lose')
		);
		charObj.html = char;
		return charObj;
	}
	function showEnemies(){
		$('#fight-screen').fadeOut(fadeTime,function(){
			// Ensure the fight button is enabled
			$('#btn-fight').prop('disabled', false).removeClass('disabled'); 
			// Show the fight screen
			$('#select-screen').fadeIn();
		});
	}
	function showFight(){
		$('#select-screen').fadeOut(fadeTime,function(){
			// Add enemy to fighter box
			$('#fight-screen #div-enemy').html(enemy.html);
			// Make sure player & enemy are unfaded
			$('#fight-screen').find('.char-box').show();
			// Show the fight screen
			$('#fight-screen').fadeIn();
		});
	}
	function showWin(){
		$('#fight-screen').fadeOut(fadeTime,function(){
			$('#player-win').html(player.html);
			$('.hp-bar').hide();
			$('.char-win').removeClass('noshow');
			// Show the win screen
			$('#win-screen').fadeIn();
		});
	}
	function showLose(){
		$('#fight-screen').fadeOut(fadeTime,function(){
			$('#player-lose').html(player.html);
			$('.hp-bar').hide();
			$('.char-lose').removeClass('noshow');
			// Show the lose screen
			$('#lose-screen').fadeIn();
		});
	}

	// Select characters as player and defender
	$('#select-screen .char-box').on('click', function(){

		$(this).addClass('active');

		if(!player){ // Player not selected yet
			player = selectChar(this.id);

			// Fade correct title
			$('#title-player').fadeOut(fadeTime,function(){
				$('#title-enemy').fadeIn();
			});
			// Hide player from selection
			$(this).fadeOut(fadeTime,function(){
				// Add player to player box
				$('#fight-screen #div-player').html(player.html);
			});
		}else if(!enemy && this.id != player.id){ // Prevent double click
			// Defender not selected yet
			enemy = selectChar(this.id);

			// Fade correct title
			$('#title-player').fadeOut(fadeTime,function(){
				$('#title-enemy').fadeIn();
			});
			// Hide enemy select screen & show fight
			showFight();
		}

	});

	$('#btn-fight').on('click', function(){
		player.fight();
	});
	$('.btn-refresh').on('click', function(){
		location.reload();
	});

});