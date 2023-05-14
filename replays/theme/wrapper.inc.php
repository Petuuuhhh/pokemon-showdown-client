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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7156041312368127" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.24153280988660186" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5553988240609902" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2323144117893523" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7620161130422312" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.09613440975901866" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7220398650256936"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.08604475404091527" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4035166248724473">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3895902721993876">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7388969333127777">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.32454521092838573">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5721613747380274"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6845219648984913"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6218688052452699"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.41486172109289776"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.09226296962943548"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.970238747910604"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6047593900856318"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2887057267812223"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4863658769664625"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.31333033990193404"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5929358878613631"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7400373791164907"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.18577397112543514"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.0413130039501135"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8400924140838009"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.0721721425553008"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8707541355402737"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5475660863981866"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.21859817448933838"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
