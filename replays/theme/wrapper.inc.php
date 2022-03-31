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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9557158577114699" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7305618400466825" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4753887905333245" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.36628670964566257" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.32736271234531644" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8983867075118117" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.34286139996988996"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7952789634843491" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.09384364091380437">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6997257921322482">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.513174552688981">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.34066336196699076">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.041911467356847254"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7400157307247812"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7446838661141983"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9471836023307101"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.478617216634204"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.04176288950210183"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9848620352159003"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.20015725752984515"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7986004368050958"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3345412811769768"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.038659043698604956"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.507706149351818"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7204160915898457"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8089775995123092"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5515590879492005"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.24785536404043151"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7455012856971608"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6143692866559158"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.21976889477211592"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
