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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.05438297125749503" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.06738259112175138" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.07041085457156893" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5273512025486493" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.41443824727112344" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4537081239953076" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7684848134045728"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9691272119630157" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3952365338590622">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5352425669323575">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.09951662519970661">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.40490936852467074">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8133475402837302"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5425799179237685"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.017530604581685427"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8978448413600499"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8928750777682561"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7111762423409911"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.21412615678129598"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6077009566603802"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6209777834492491"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6105503557030967"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5045338289860493"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8312767491054642"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9838051415229148"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5102378938077985"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1507258861412326"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7541314833899486"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5411029370133158"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8862304283914044"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.04440657934953651"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
