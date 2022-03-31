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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.752070196876381" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8750785972645514" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7845046410071828" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.12017717495398905" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3334823266083595" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.781293691889116" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6833371164732751"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.594085812095285" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.835825072138654">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.46546128149019617">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.26453195577929733">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.1820013644312144">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6523542153579525"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.022315090582639696"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7994944369950547"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2559937874710869"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9665906998877725"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4033490203929162"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5125719397406061"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.38821536632244547"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5429358979023944"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5754464244524637"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.37714010157265054"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8071987915188397"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.002601824005985076"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2967329649122885"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.008754406767689238"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9466578641786614"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.483516638928158"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4563575970460738"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6772324602561228"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
