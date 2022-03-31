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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.779187380438408" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4671438708421891" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.00511058495768002" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9706294008706247" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.05771946532156269" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.24967334109433792" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.17143501099615444"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.21723713147626644" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07132805056869773">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3492378577245765">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6414366881658446">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6770359650269242">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3208750911359268"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.794146323685196"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1744029176408417"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7878091550758812"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.02608703246669286"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7560408183125844"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7473123634299024"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.14065269882456066"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7675999849146771"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4853213563306671"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8027746031249674"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9539677228527075"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2917720615006827"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.48967513622061687"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9610577532679445"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4491841763397586"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6266992262485782"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.013234236251942866"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5966218987894798"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
