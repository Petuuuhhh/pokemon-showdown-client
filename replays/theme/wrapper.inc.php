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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.13457157723842172" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3831723389398425" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.22147386932647106" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6493610127831693" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.27617273863331926" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3708027295712766" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.46044640871775866"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9597198807225282" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.25960669019371285">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8564959077751628">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5165140764089371">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.12137678285165499">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.956724457332498"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6935968820299447"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9948838631769625"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.06458108113907346"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.080030200196199"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2866281632246743"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9989475769243987"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5453892039468751"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.16377286509778122"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8847958151928839"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.28781694302373273"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5195303185901163"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.1606526246492741"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.10149594589258082"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.04100361216850046"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9463809587807155"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3758922331093588"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5196361651084513"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6290662606308441"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
