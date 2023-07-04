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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.43299117636335827" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8252555986431849" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7596345543502641" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9596863857488169" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.2992305137507576" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.1828858367618451" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.059254578025006"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.40446546973869246" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5223295600573419">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9996597905804543">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6709689877942915">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.38179614653999594">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1363578925698279"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6781608978325249"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7673318735836647"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.06398576199220996"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9768856978549125"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.05372678102330308"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.22269687747568323"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8489357147198282"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.35198184581982983"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4671604581511768"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.05589856382698599"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4764114619150295"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.08774702335342432"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2635523290238193"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.27212000668667824"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6224686622365012"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7996279104985744"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7762726048669459"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1367372465548753"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
