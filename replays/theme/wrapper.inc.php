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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8118912093017443" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.44529782685537844" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.37017153245099044" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.19713844232907451" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9109643127319957" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.08287212925672227" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6632361811539924"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2824535317199841" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8940125728721966">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5938773400136197">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.040203268924690505">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.05109162597822059">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5834789955997006"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.21388360045222932"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.16852099110032737"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.15553644029581015"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7205798274424102"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.004820659111756553"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5354355798882904"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.10335285326563537"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9420835237455107"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8545198671501031"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.45906297788407247"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5416611609670039"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5281544290959892"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8389397688946039"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8641346156476044"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9313698884169004"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.18612100043553048"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.22719669150330124"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4635094865892295"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
