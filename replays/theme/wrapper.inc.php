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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2501721275279687" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2402706096934315" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4909178019259808" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.31144858132334696" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.352812338748008" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.07118237383105086" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.11384288468252812"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8234692652825584" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7500540092182943">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7460407820506536">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.25220110939598617">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2522530253029307">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4195782446379166"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.43357029790921864"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.21693422743930246"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4195916886038036"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6636989065652408"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4831078914847038"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7630382855764815"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.14203198098202652"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7584183389217916"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.17952666224760994"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8719535101753191"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.03692436020090861"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8389223816492595"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7320348493932216"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9623478185265455"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.05538705135258115"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5582508400990447"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9442612461262228"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5854061742130503"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
