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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4984731247719729" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7814919473844582" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.986682449939217" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5776595657107932" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.594194408235919" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8133345673756252" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8021350528346392"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.41981082693154415" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.04211350386254997">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.304290792136237">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.11141459440928392">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4655552088754722">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5874595631767134"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.43230766798450415"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7995565181623259"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9194705828089611"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.661246842957057"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.11665694414124084"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.879252473613926"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.36613984473049066"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.19525451088255386"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.28132058878681376"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.42169834023800656"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.20599759709989218"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.773052049187275"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5196277445008193"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7988404689240309"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7696793733904037"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8784824504642126"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5155536709768092"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7987055403221774"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
