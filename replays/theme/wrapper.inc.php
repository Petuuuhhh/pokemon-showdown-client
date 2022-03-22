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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.37063922767499125" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.32503567637827957" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7272175215136101" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8468914263993412" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.31251468644730207" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4224803321612407" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.04781224583382304"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7333968708500298" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.022298657436403913">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7598479374128371">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.08028362120454036">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.19858454394505687">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5071248596248381"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5323218383180639"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5734542139565582"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6800759679511208"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.46938637131321004"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8207089920348871"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.14288932766880214"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9870351600178842"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.19909786188927803"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.0846539568115312"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8142529684719202"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.006357046066107097"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.12657713224563882"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8753231474310823"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.15309332649310403"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.36722118833566864"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.932569574360907"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.45893273025661996"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5153628700334381"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
