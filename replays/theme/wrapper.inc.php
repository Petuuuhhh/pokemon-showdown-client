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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4573327031254619" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9974434268026338" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.17508514532816855" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.159743068475227" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9088474421818193" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9905982305525234" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9265830479732879"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.1642604147484943" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5110440579807729">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8102080112852155">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5364647828680882">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5742839375605926">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3589784212955156"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6540693564224225"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3319698164351863"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.779382253093091"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1408831735293734"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.40915507598289347"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8621376231815465"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.616483111798305"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6529766201520186"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6656655746369176"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8099665353539072"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7894333224549492"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6653425316660209"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5801008887554238"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1241898690794423"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.07786591008486154"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.01513946790832299"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4426420188390232"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.09517340870959345"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
