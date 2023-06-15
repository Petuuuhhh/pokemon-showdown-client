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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.47357358123974236" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5830352564052845" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.28680630264267015" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9469446159336561" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6407935763955135" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6961344351658219" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.0630278615795048"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.09485599136575984" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8644614020153147">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.27189070015435424">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.11143905125390918">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.10699942823265474">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.737573949246688"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6002574256269673"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9207731256247345"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.04404622006964676"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.11508381251591193"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6939529960915347"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.48324809568058913"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.51188627309305"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6255152638139516"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.24347747745859483"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.07474882031917662"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2582135719356504"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6015445928898007"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.03691754610846387"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5075999579856068"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.0362128623601512"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.553252222523223"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9472308711141699"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7466488783103862"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
