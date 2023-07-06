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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1517784788607195" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.88186833092434" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.17029105709065995" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.08544979976842781" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3396307716796907" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.08310226645712038" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1728102488147092"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7776526205404595" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5185345930943608">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5205329390793689">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6067528252809546">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7692007846196285">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.031943838845391426"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3953593568604401"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4733001087756268"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.25717262820837883"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7110340068946774"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5634946113297492"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6579096979324659"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.86879597896153"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3630327186149436"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.928987793312857"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9056643652226377"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8989707139140717"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9769520740426874"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5939014573570276"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7926168036514447"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6211901669875779"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.09200039617237077"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.660412207994377"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6266703749728861"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
