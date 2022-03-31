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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.286640014181756" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.29449715495716755" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.41143625012583684" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7146464086923217" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7417642335728853" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.0828148266956279" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.861386353303917"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6629034727900842" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9394683268458235">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0568565538760577">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9449755027440909">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6122276055925935">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.06341796993915705"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8157692385445667"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5792290366413415"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.604955895920936"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6965049192515025"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4916838804759609"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.13581215465849428"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1502179472862082"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5197516091835188"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.061950287144037386"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.26614389520509474"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.1366832745342348"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.02961902380504644"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5870911717124283"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.753351010857527"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.28385318733255716"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.28637847356977764"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8060146345169044"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5615152161223429"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
