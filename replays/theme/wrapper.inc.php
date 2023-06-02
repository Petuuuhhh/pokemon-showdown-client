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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3053508700871248" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5223332054515675" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.38685961467403884" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.896038772473084" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7454695965801375" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.940455635755447" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.06632761607094051"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.995706691809984" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6240096621387843">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1938753505098343">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8974415416017067">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9056039097679927">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.21867110839553705"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7404807124970658"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.951441583214726"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3359674327081814"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2241240278530734"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8080098189971916"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3573084682018417"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8818768804845702"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7603214346419103"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.30718951568482034"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8162426189275358"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.060031481568844525"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6900840322528592"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2090663362512346"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.24493142758653708"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6769519627454252"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3717599868915218"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8191391396475445"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.355720977081454"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
