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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.614860267959735" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8786184265824817" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.190057432828304" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.09491238371808364" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.11978485726577803" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.33281830876787066" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2575858879875952"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.793308362286506" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.610409151131341">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.013699451847761335">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.35702333071031167">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2849870994994701">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.21118618804267597"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.01264876026911499"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1549238052788411"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.29480998959727067"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.721520522791445"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9389853494578426"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.76527745055106"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.27747970284065127"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4798344365408296"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7108231224812793"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9894434448263012"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7130655042128276"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.017175353894123058"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6745087049242511"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5203581070516399"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.29582707683207077"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.0051167978714397044"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.24521237062093904"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4879389122959752"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
