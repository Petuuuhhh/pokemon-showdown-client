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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7757247471692259" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.14085134841174463" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.23391316527518424" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6684066899830607" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.20553381944885807" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8830937731896644" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6506493613690918"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.823884557191614" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10216384304975956">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6379014754212964">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.21182698724622306">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.005504557919695063">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.07771863262986622"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.29969446277606404"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1641179869731504"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.41382742640382086"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9224753006497812"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6771583745972816"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.13410715906126813"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8420162613051592"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.16162429597709904"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4037242651471846"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.928888516474734"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.1097632155450452"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2691080221973856"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5040604891092186"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.596703930378998"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2838044545731677"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5790586789874417"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3382539199919372"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1507158150194603"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
