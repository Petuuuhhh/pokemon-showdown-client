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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3697640536879909" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9962317821075153" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2785936477310538" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.56779052736606" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.23227583500073035" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7077670242228511" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8025741890079587"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4910080460671269" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7725394316990453">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6891619004803073">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9988064216890042">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.05901446974638924">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9596979641444945"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.05369913160770068"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5115570402211282"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9324592808256849"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.036660241491339285"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.30646844657157635"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.16891138822349805"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.0030175920337704998"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5225230074647746"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4923953986946028"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7132660510568043"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.08142994172151452"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5087518843316463"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9553288679837977"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5129717541855712"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.21841874725943744"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.994832073377194"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.412130907538254"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.14054509477626587"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
