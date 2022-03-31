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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9066052462037639" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5436449933304817" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7246547763821913" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6249596687628902" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.36472874653086507" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7736587546194675" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.04580039573467509"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.43267627221333305" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7472666326041479">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7286986610935513">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.036583071855856186">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.44943496624192836">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6788840105741869"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.16575133272953146"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5795244071597361"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.11236186463608311"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.805187496692338"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5177399322447522"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.23443966669998217"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5137930191286448"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6661795475687122"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.14676035038301127"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.18270309356250136"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.19436993942787617"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9864880906205789"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.24014317253410966"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.16219567156390013"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.034970654197411966"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.41799214969780785"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.44227374475068904"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.015712036862023604"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
