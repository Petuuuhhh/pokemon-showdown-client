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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1760617575166552" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3119655228173335" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.0536681932637284" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4092122514917469" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5605162279732665" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9642006239927692" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.42104042432280564"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8326065876634487" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3981031007255087">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.47387621249079914">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3797716487267633">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5180068746764195">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6643121613679004"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.1808582547835782"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.680842657615478"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.35361669701855036"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.43892902348482177"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6276634384223658"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5595411508353787"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.43099466048652424"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3293180117141501"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.04031588895620475"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.39133062688434306"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.11083226750575514"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.053706104776525265"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8597820764308279"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9069745808557732"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3366247872340937"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7564043400955096"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7270381662853791"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9026538863126092"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
