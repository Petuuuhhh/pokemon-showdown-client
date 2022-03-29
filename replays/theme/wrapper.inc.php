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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2513094785102312" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6358251988273318" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.35426970949944625" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.26502010024748723" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.249806898926898" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.323112867126351" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2842549260240539"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.12188780553594247" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.006771604666987674">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2669623321133465">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5644099514782206">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.023754575402808564">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8728746516227492"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7964451399235029"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8810421177705701"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8945836794652517"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9758681046567541"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.868818373761298"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3294126335184546"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9110489352684017"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5696094244473282"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.136112731974382"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8958800240972791"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5647427249108807"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5075859968701704"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3069488257022457"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.43201334867103247"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.34692781831118014"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.024449251611222245"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5375659275155757"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.050631345791423144"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
