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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.08992938848076482" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9400432846266025" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.12026190451110974" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8763475484301031" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.45049197122379425" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.18398222144263254" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6973714748396955"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6517715730102807" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5307435484185883">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.23971964249014222">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.37620518859726726">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8179091869150028">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.36971019931945515"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7359607460103299"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.84486427649205"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5790288374226109"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7230333040546268"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3744763671387994"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3801590835636506"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9232178716186685"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.222278679686706"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2543918591126846"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9125000910739056"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.38647076972418315"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.24816163859557938"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.24930875130421626"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.660778124580182"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8318138430112771"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.32867874670311426"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9921324835917056"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.004050452642397007"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
