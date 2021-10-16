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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.04921590322868519" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5686940647558059" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8633880913471959" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.016877089046426264" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9007836877365261" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5694131194881273" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6632691466092429"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8616797796532347" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3896372424868897">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9544037931989278">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8164643379551533">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8887841435340038">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.58772273591685"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5706785805021171"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5265204322805315"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4861519824071956"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6228472468445172"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.34857162564926214"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7485858769689917"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3936230551274198"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.20796000135960568"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5335599004464455"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8149318011505517"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9023321564148867"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2714027702365789"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8260648776726403"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9488894217219863"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9399748822628984"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.0822150815590017"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7848353596722788"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.0026479797872058786"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
