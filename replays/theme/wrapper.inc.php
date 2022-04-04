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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9775843102480419" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9891909758609989" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.0988458535659631" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7767135066108672" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9588189324968242" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3436729183184837" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9420483501846733"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.13376754751904363" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5823258487646727">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7781544253678221">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.10284367597650035">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9398253178203262">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6176549740289763"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5489050010291412"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.43831531828400117"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3258906229703491"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.12758732025666664"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4719781927263442"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3650057339312427"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.009911555409577222"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7773147341915954"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1292153472962434"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8199640763978195"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8002342265703359"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.894437667820734"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2825712414696211"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6878464355716665"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.38024742579679405"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4259411973385083"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8942404876896266"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.38483642571814647"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
