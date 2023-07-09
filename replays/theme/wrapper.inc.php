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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7949083002749495" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.46538599690067084" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.531592393429914" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.939112312793758" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6931091291198745" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5870206166308132" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.37244194394073893"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6543844261240757" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4224951960882155">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5191822421117864">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.23459694758544702">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6491557503048102">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8368302938094287"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9171550995070394"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.19299388564876052"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21925412282102164"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6008952337383868"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.030706125386639638"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.09732836805564471"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8152831566998362"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8266837727224947"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2859402048134747"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3910325758771762"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3296461670151065"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9053615144163738"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6102878077035634"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.44424033643660876"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8400365386891826"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7184938273175814"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.565517537365664"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.07951154719963016"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
