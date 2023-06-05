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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4501753027038724" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7061789817254678" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3764828031850953" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8581672977192647" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3679991838955292" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5249660033178216" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4922501623321589"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6252745801788664" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.14693629533592767">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9412967513580055">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.48921962470986635">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9670217606678171">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6149203888361037"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.0657438608785943"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.18472619492521325"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8059939079887752"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.10601472586152672"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5176141643686096"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2427219904544975"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6092981255423024"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8578022114257862"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.06117955585668344"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.03767035788987805"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8705116327990905"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8335756073216167"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.598372646873212"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7677409093617498"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8313221379465983"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9308726778664314"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.1876275588664209"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6924896757165591"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
