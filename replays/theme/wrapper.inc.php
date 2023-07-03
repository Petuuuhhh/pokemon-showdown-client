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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.08726443807868889" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4814291362875016" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.12745252893463266" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4812685403340815" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.03893975279613682" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.165912431072877" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.25960318836498497"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4008402892234988" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12727129668367865">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.17427997783691596">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.34934143228599956">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9058047021117637">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.12294669540564263"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.655890628440265"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2785421609292511"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.996526852124427"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.0857190702283257"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.243007282188058"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.28176371934689715"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1208825599860619"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8343674555848286"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8081294323979218"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.142828017431192"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7342449806292128"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.16102906613086643"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.30889640649153516"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4778313769383964"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8983138579478875"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.07044774930613618"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.37099583867318175"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.484430097485431"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
