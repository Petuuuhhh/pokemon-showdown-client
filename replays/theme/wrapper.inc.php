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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6389233896177775" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4047931377725065" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.31430978526992304" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.20723295344803616" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7334964120490932" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7160321741957212" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.39411299323382876"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.24262975794754515" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22170631691186826">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.12702502606032473">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.15038230932703445">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.011611821135824707">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9639285589866913"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9072265757649922"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9387273708496566"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3938407286820873"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2779223712412946"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6803203289714308"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9190673838691485"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9826110298404196"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.10773754646809541"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5225224969266098"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2110931465190653"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.11961468184281299"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.1719809791898419"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.14655436161669555"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8100605937111238"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4047023716817788"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8443275023587238"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5845339494318313"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.03588870386371101"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
