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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.10814032848651056" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3935478730516033" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7777428291929092" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7975893540045425" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3064691150797254" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8018309246373998" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6907819751202158"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5217362605096973" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.09257723528691963">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9003817384882942">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6889291114960012">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9611788541901096">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6911079840468319"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.05429664767487008"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.882792873753667"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8866257736832068"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.29472867048032136"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.47369895168003473"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8640201012739361"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.45720598916363864"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.20216865650240323"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.348725691226873"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7627286509475584"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9128521027539074"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7349048363106465"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.481557152622226"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.22948217292077633"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.16940968234539966"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8243387653036245"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.472649038140448"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7025605552536072"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
