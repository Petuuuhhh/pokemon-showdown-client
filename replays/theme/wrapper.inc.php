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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.038474161953702124" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8480618733794294" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9823304618358748" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8433041523717402" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9868806378161024" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5314666793143812" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.29921605819857344"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2708825477451626" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2087891384486793">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.004110150575566962">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.12393166673347578">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5993573106167451">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5880425052586147"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3978641527881177"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.09402715193897793"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3400827845467922"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.46176615039424296"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6845540469641642"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.11844739660293357"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1456982587121518"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6268606909562071"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7510875786875753"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7121088311292014"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5578832593070187"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.21886467961704303"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8764229223814952"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6514956348451211"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.18012588123693174"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.43524752916884424"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.04544631150683043"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6256347619484237"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
