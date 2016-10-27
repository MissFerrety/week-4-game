$(function(){

	/* Initiate HP bars */
	$('.hp-bar').each(function(){
		var hp = $(this).parent().data('hp');
		$(this).find('span').html(hp + ' HP');
	});

	/* Instantiate global vars */
	var player;
	var enemy;
	var fadeTime = 800;

	/* Create character class */
	var Character = function(id, hp, atk, def){
		this.id = id;
		this.currentHp = hp;
		this.totalHp = hp;
		this.baseAttack = atk;
		this.currentAttack = atk;
		this.counterAttack = def;
	}
	/* Character takes a hit */
	Character.prototype.fight = function(cpu) {
		this.currentHp -= cpu.counterAttack;
		cpu.currentHp -= this.currentAttack;
		this.currentAttack += this.baseAttack;
		console.log(this);
		this.updateHp();
		cpu.updateHp();
	}
	/* Update the HP bar */
	Character.prototype.updateHp = function(){
		$('#'+this.id).find('.hp-num').html(this.currentHp + ' / ' + this.totalHp + ' HP');
		$('#'+this.id).find('.hp-fill').width(this.currentHp / this.totalHp * 100 + '%');
	}

	// The function to assign data to a new Character
	function selectChar(id){
		char = $('#'+id);
		charObj = new Character(id, char.data('hp'), char.data('atk'), char.data('def'));
		charObj.html = char;
		return charObj;
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
				$('#fight #div-player').html(player.html);
			});
		}else if(!enemy){ // Defender not selected yet
			enemy = selectChar(this.id);

			// Fade correct title
			$('#title-player').fadeOut(fadeTime,function(){
				$('#title-enemy').fadeIn();
			});
			// Hide enemy select screen
			$(this).parents('#select-screen').fadeOut(fadeTime,function(){
				// Add enemy to fighter box
				$('#fight #div-enemy').html(enemy.html);
				// Make sure player & enemy are unfaded
				$('#fight').find('.char-box').show();
				// Show the fight screen
				$('#fight').fadeIn();
			});
		}

	});

	$('#btn-fight').on('click', function(){
		player.fight(enemy);
	});

});