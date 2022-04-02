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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5834787522463942" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8862076102786469" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.0029180605185556985" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9815083859247093" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.2799695415150607" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3824192122816652" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7574597483669421"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5154119897570268" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.04243842176211521">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21144780472605773">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9044903346529918">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.41555914087735824">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8856531900034166"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.743750836114597"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6125389039865001"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.35326903722109937"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8291335193843286"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.22966250260401888"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9935983497802008"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9125926704301817"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6408947351492085"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8382842070858265"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2528876300009504"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5552635304656972"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7181997863870733"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9021149720341388"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5009883425265986"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9873508934159667"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.42754424453680984"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.07467693215359938"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6139109000886394"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
