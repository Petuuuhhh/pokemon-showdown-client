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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8111403637455856" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7979690853416819" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5924815630087912" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9482495380420495" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.520036205790356" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3470667820511799" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.05221710384329592"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3114904287408182" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.31643558474390554">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6285347632866811">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.21376368746680918">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.040430022416820366">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3202317269060735"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5244655450230311"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.21858738376766484"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2925891854416658"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3753837482278226"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5558164886748633"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6699607697412442"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3127098631933043"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8134178126694556"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6673728427437364"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.17518059454650325"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6201956387471323"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6419473990307949"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.700105373590364"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.646056019728972"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9531214114508566"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5525076221331802"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7068809021602258"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.775385975824372"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
