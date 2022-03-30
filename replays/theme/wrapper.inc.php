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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.36772971646919217" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.73670141209886" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9818498016703434" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6919711785882519" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.06865589130902428" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.01022394101927837" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.07455134396265661"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.629638992591544" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.973665987795789">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3775105741052407">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2233626399113524">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.08742467310294">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8956547724202146"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.14325914881930424"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8451271177020838"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8111808539235006"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2714406636348856"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.16912980452068616"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.05961446531709802"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3857845397654318"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1608872733486073"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7087452405200452"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8018421312343933"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5813131243431162"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.37093782768452566"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9835055106710135"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.26770447275129805"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8432130108482365"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.40409004136507587"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.23507065163619534"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.19948463528754345"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
