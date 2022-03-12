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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6997158687347957" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3247397918451558" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.20160649140366838" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8139253486352174" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.026420103855491872" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.0310965559538392" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3766262984646729"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6880645564445522" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8324545646714612">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8596012262598867">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9842395721397432">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9188651799984255">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5163517691581279"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4102584151907753"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4584280962352423"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0591268630228623"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6077267983541639"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9112836709112129"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.761808001378036"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.11731221725496876"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3939594895766516"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3626061854908196"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.38687722152687054"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5555553072506456"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.697438284626712"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.02374520648979117"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8226645467894136"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.42699703283467527"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.44298157780380487"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.36564460475799176"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5783672001891063"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
