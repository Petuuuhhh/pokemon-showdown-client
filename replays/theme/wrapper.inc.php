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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6398045264776271" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4361781194794998" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9168598832699668" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3995970354111884" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.781719716677169" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5974843756446135" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5653171242788857"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.47661321717797756" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.14671216123194397">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.18000417277164837">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8391320543804781">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7029865138229894">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.31535747163572103"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7566704912914093"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.0865988168615357"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5561159075069226"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9386390932998085"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5903919829086739"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4020180709263781"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.39709253070559214"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.19099965116794904"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.14659064298823665"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3168717941682977"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7350375394801576"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5092254203792055"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.41465429417647903"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6875044519446112"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.03197703605345126"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.458601212728017"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9048137194052379"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.678581505753652"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
