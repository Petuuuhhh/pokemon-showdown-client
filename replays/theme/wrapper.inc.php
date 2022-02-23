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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2579062583023666" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5926095329591781" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4747545329056386" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6134617865161729" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.26093705292237646" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6123916222764823" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5147357423786638"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6924205637815017" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7445169147675981">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.23105897986620438">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5354375898245232">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.1581396583047796">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.614884166048767"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.09719010347170864"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8198529874969103"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.37106640264164814"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6624611795571007"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.960159302987911"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.1361890428368655"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.838100195683406"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8154634407596337"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.10917271568399212"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6268204950167957"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.12048824381415302"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9517196775644146"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.0802719564952854"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.716596283189548"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.028778868087483866"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6226268034824303"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.11644739190028108"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2801147425177499"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
