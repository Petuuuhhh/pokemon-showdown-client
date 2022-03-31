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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5472774994048992" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.19811344867143243" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.08643456201614264" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.001853602440713198" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9213461864359671" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7314602513299844" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6554300744751829"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8657810395405123" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1542653278816304">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3316391325643977">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.028439695416244692">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.24173455604596028">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6467114236065634"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7331050800862309"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4148657862507197"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05083416244359107"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9768341319398668"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.20621332705312545"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.489692533169906"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1249452039670913"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.19396070531965548"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.029875298028851693"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2581277434186624"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.737047669067163"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8898158210523115"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3080664955641792"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.934674770718658"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.04972763970915417"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.23714457419165735"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6233245952123077"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6115676461055355"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
