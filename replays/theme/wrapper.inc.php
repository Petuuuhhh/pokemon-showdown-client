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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3352347437983416" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7521553964887051" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.022464342700484252" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7672458892468514" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6828531545562917" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9251715571107486" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.05823532352200167"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.24112175383719991" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7142196323359651">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2011972334818377">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.24652906986459056">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.1312684030415745">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6639760394974916"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.12394208826745512"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9253396217894463"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3252354413770979"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8417929899265948"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.24137446003427088"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.005114784453888355"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.33876614749347445"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.025838532214282006"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.33657408042502657"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.59296116580759"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5429060808936708"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9004291276016994"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7500809042177978"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6556585437481803"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7275848228577795"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.912626260997198"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7484853176860202"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6690479505268099"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
