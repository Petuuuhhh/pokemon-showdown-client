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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6360376571450579" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8932636134126457" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6648011115902746" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9242007294756676" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4722965053520307" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4955522914766475" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.29720083350859894"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.151582608013755" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.49943042779680935">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.814585511391126">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5675165942422129">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.07249609535087864">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8956252813808159"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6641191680890091"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3982716997579818"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6326132332979157"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9871142174601233"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8700342792941114"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3343616088709258"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.42504643273011045"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.02811303660037301"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.30836798485822214"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.0004124985288336269"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6772518025432277"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8820350527349585"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5746050922682893"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6610182355727392"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6124391140947301"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6812762746571299"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8287889838889753"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5057768799473912"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
