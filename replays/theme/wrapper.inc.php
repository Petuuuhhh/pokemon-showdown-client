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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8877862009823325" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5279329658710472" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.029198573485398116" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9372813029603528" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7363748941775212" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2597990119550371" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.784776474768051"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.14658316219549805" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1976765245126315">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.20380713194057254">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4195014749751098">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.14895134857446957">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3198356761808492"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7183111608654451"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8148325935968683"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.03119902337397651"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.013491133257465204"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.34128955930337335"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6271649546236864"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9584257614483145"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9580630811782418"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5817429520936936"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8503704928431681"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8571112855415344"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.14595200471985437"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4780936857325704"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.02008191967158579"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.1368879509598644"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8236150690199577"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4338296199502216"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.37138627598403584"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
