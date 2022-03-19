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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.17657490193227554" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.1475123945054695" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.609771321030403" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4271909988139626" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8280959291077641" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.939833081434259" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.12117948959974822"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.741737642557464" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.40441140782930085">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6739364223948379">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8512891619155518">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.42893208221228796">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9332672780340705"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.439329141437119"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3972837902427524"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7850429849843672"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.629208451310495"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.09972398747944733"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8857773963070343"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9805258513771362"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.40650182302031035"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5814328229966994"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.44915813869046195"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3655427376225575"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9939828892775922"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4411999970101783"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5604509124498473"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.21824273855136633"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6410112514831492"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8354474632510211"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5422658897430606"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
