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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.44768410787657986" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8304990176594844" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.06129141603084021" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.37955781538312894" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.21739415509622795" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4938593101108839" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8872625431562489"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8182516452917312" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9956607579821741">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9213247020972479">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.28953795095607426">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6880420529761428">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.27189323289730405"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2487680660969147"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.11179058564445077"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9295985469565788"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6503163981819813"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.30569017201306403"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3967910472692444"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.0931035559626181"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.18150751116403518"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2358213690971671"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.09812927768238722"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7882519869803657"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5664298840929765"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.30338347953837674"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.927868627542271"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8319812365201538"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.1596901498653276"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2562578607024739"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.19066337947888634"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
