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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7845284041083489" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6648022148186237" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5770568779542955" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.006259348279280319" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.03323216486461211" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5200321135253518" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9703177762126827"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5600942308738477" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9315182685153018">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5834821408107838">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9389235430673499">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4035342942450644">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9340718351528667"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3430517760628742"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8999293291361816"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.14640779271095128"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8577488775157471"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.46760148245688016"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9355773048600728"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2856554766581074"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.770390914566268"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.09351785290424464"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.25788743086036225"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8107276682273137"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4608684743071696"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6092218316717579"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.838098909944839"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6466938149929959"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.11700838010509651"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.14378411914854916"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4854145373673757"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
