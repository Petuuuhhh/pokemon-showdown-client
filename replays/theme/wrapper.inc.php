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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.12363285751343867" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8823180345617199" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7941191444167859" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5118276670469475" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.06495515672672192" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7204104865875136" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8766371350050848"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.008813304022867507" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16654751102116894">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6011963715051836">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3281966332837294">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.29677540347199205">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.20119466469027314"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6907403211450922"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.22097238701236122"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10078222376142709"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.429812110649908"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6969335999728072"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.360001504558497"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5602195715360485"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6004612794863449"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.91735613161753"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4223863031979167"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.23150619757852442"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2404369613779107"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.12730922100660202"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6793870557854793"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.1723484552428045"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.42015587281705535"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8585786355465534"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5963310193872406"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
