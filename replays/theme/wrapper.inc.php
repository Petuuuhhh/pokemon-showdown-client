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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.15284828919540994" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.727238152109069" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8111921933729267" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9967190673029107" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4387947622862163" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.15182204993045456" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.007651965825546281"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.13254535513778176" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.41230288594620523">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3911541906424738">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.19606700522027487">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9468726685550479">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7173480354016688"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6910611340633928"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.12356771199732974"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5716392086431341"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.09826023356256797"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8447961002633255"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3469814777795095"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.22140237327194767"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4149191427386567"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9597557369403622"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8108184710639108"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6737546428784347"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.09094207951631517"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3473965990459902"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6174293540661842"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8403087938190414"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9241220529707195"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.37286894255057024"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.15896470627675763"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
