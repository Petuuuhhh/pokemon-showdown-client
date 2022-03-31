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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9848871734366855" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2511812025650213" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.21047693935809253" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7544184571835608" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.10903023889362329" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9906280223828474" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6310891248282793"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.30260396813100066" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9346406477208173">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08452817404777879">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2794148611737439">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.17168241452476618">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7652210814729505"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.18886933862664623"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4049949143409042"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.412549167131111"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.31231513701374647"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4294220560727331"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9303977248271351"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.13379569421567483"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3580843916968901"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3641071491239867"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3763648750104589"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4306151062838135"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4588591433465985"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8423803806894088"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8447480772461997"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6542040894832579"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4325515113360878"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8581179466266609"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5159343709277724"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
