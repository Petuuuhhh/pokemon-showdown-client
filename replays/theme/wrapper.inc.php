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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2503952565982277" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5693228372108998" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.18980132098745828" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.007655695481134872" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8122433417235995" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.39760919465928746" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5906987474859864"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8604674556815877" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.06839684908801114">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8595328413936312">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.30673664950519264">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7361276368583713">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.27513798540825984"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.16911206456869032"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6027795036396506"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7950802420074587"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.08962682225002006"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9896561056991438"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.669104606323967"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.32412696113486494"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5886681596767047"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6391826159853202"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7444612437513287"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9288717438448411"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6394045282788774"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3055260182815762"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.809916154860129"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6664357390174485"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6960398964051495"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2520344668036729"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9210430501916307"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
