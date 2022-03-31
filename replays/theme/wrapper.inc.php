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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1315426788288967" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.44879194061376837" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8631630612956662" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.07086297693605581" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7687014388314644" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.856250173351897" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.537987421388926"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6559952448112207" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12652183240685022">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4652290272452848">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.23941378769916732">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.09318522994339173">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.23958636437118508"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.10607721733778219"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.64470309180837"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08407565004204565"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7735961035441858"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7759386399631891"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9712107144456277"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3081697751304091"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4887112133892777"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9960461617536327"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3109436987334415"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.1085357268717071"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.25174284918634826"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.06692377226681945"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6237478028016705"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7182798653037856"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5044090344676468"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4441044663272813"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.37259408084000833"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
