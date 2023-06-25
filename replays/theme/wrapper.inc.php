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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9140043597879208" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5320341774498787" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.09906166446216202" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.15962215964789106" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6601337909205147" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.08475143721532641" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.47240814829115996"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6052113732783935" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4040045167425481">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9857754715926619">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7973591495118058">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2519356534952546">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.93610374805093"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9226250964781815"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5138376355744945"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.23471204362764442"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.08458431541615985"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.507723052191867"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.25870202034903134"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5370521893424438"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6017181059803256"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4000245878095914"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3005516159223376"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8631179288162174"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4117568700695904"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8865223338049502"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4293031573712325"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9833731002508876"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7247870191121593"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6899042067386487"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7759506477497986"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
