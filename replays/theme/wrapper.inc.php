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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.09397703141890701" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.593182832120952" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2539896735998193" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6273603990075041" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6669345251931347" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.504248445476835" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7613792313568384"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7148338505079073" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5478996002747885">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6270150664357623">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6649785670364672">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.20442262241892584">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4637529742063833"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.661999692946488"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.09392747645962807"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5905474603008021"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6517608361249652"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4623277521110811"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4062477012582939"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5136000601915358"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5615523360993746"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3022415944817356"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8411119085743417"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9917650706642385"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8066508640621513"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5596018713676185"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8887904445971286"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.707495671630666"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7501828179565189"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9154653098926324"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6730503468370872"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
