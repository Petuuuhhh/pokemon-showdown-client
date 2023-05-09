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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8833988338982421" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4813334489653003" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6094880127818858" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4727470419498139" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6280496445346353" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.23061095308198332" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.934595400728343"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.10689268218594816" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8411417171766915">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8480442860478217">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7142313386350738">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.16870442265407415">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.27331100034655753"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.17133632540030952"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7628589483820851"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08107840844594927"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4418075860322841"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.16964022010228663"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8293195433100491"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.32980199684672185"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3322864571588857"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1011629219147947"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5474675599609382"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2022493658693223"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9582634319974064"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6933484635837193"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.24649351612169346"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8304994530019596"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6386487823904696"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8620746933542496"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5133881553261539"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
