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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1258127180887083" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.707016615302394" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9359874107592381" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.31587350915457835" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6614238126540319" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2617724810515769" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8171989002204332"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5368064769356244" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6318459481105927">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.18028116530784422">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8622545392040495">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7843402895680471">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9815790575211807"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8158804044939356"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7691419047535264"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9590842582937564"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.20151198048303742"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9470907693688038"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.21022533821078526"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.778493643241563"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.34940989870048433"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.24539621217211827"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2796898038238249"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.37043001112617424"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6911669567873411"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6432693351706198"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6632953572856104"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.629594644673362"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8735865164853593"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.26036301076483404"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7564948036698664"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
