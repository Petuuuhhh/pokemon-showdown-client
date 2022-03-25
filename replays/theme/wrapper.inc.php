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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6993431186295702" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3468132860661721" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4921206935451694" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.1636004507653641" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9157151870717988" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.0700769212509813" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.46722335183459074"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5661394551967509" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1341902935806223">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.42814741990787675">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.49177386711671756">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.41087382720612475">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.45393471466189905"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7315111934991159"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3357026104381273"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.46069855767730417"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.09461632008624865"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.481993089741547"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7966163944003932"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.41109929685170754"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5732068048951073"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.25212713845298573"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.26826555589591683"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8962561941432596"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2884402163533786"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7459007586970787"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6223830470997356"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7314855581600397"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.19727064230866564"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9936338027991602"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.18553017248653214"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
