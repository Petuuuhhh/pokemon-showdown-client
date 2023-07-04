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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.618321326922368" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8621854827211481" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1665397176112149" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8364738375989127" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4340733977122664" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7855316922733593" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8104043497897786"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.30794385482176967" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7109314447081581">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.39311118402179424">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5962411509797181">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8244613628161646">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.025060451485598545"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7956036472632937"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.11629865319113586"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4929802009620088"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2829764092009075"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6860001803715434"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9324089332344034"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3507102843867196"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5998010854067943"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.751560211244555"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8230354242706392"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9849281231582094"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9361530249914425"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.22102298359000327"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.0454588963477105"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8365484350940144"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.26601345537735943"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.1865131545608174"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.07194286296143115"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
