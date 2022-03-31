<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9341010817847051" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.12583426319148705" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6952039594454396" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.22648926461481245" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9327426435405457" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9446020307406147" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.11631155147892391"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.45723838782951587" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.21597366011920327">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.984583466448554">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5406612461356903">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2156280583407295">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7717789973988851"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7662581459320525"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3518274257283789"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.49858771339333474"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8445709932274374"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.12405451775139431"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.39704795290032413"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5124654738869261"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.030863151628793828"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.853346391877273"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9344392058652309"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.32297592234151673"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.627119673916811"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.18307827272321076"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9947631885230965"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.21496795466862695"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.20569741587699775"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8364020389249607"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7148254310165609"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
