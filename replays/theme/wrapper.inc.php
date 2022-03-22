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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3409956626892612" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6433854997311212" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.40690929993587943" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.15667866380622653" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4787529980395433" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4741341080287691" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2376877363827794"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.32090533879676864" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6454099173540915">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.31983729032787744">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7362562756215865">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.630112683787897">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8178835866647569"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9321037077781973"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6505642651863348"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9995220564118288"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5519032274067361"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7522636289891893"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.35791171644429354"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6367657446373491"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3353443953571078"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.46440070877856465"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9504703061716275"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9227883115152804"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2447621979543777"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2441737559004482"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.050468093137038705"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8911411567980518"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4102694400602822"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.1903071094148554"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.22660224311796928"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
