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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6192496024131924" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2133984583834454" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4581827956377533" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7986967040296611" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.78240709820168" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2549110974604172" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.17042143767133466"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.15677932033556052" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6935127610486334">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3643277608432851">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7216338312465509">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7800873677694518">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7033867589746647"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4707145742760319"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5624897794020094"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.12113212444351151"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.09951383318572637"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.36412016828722416"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.19243972983690205"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6335909135058695"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.31829854941488644"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.22705206714349102"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.560219990189015"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2692283325140552"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9061794488183326"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8332739427103553"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9411853264819876"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4206637507604192"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8656440111145554"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.26341616607738305"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6083889032211829"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
