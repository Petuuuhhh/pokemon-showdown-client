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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.32812225951043916" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8396610775191604" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4079339417617984" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7427506450311212" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8956350325653282" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.47437323728096925" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3756464701487221"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3431592353219881" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.963979334200012">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.12386760053693147">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.529832057105456">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.11056000197139682">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7230073376448756"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8461018194227079"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2201676786971445"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18805406283894044"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5947560743539668"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4690680282385755"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8654184629437565"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.750692653335036"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9005877949194998"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.12017371895882523"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.47856170069308224"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6473312089073942"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.16465651480206733"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.978395874571925"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9938111520401327"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9046569930029964"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6316189432040613"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8518720400501585"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8995761414683767"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
