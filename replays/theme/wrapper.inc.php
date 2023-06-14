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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.18970762537575858" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.40407233385056096" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.09941939198008076" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7585178297827198" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.24327861010233454" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.27935120273157543" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3026657350122983"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8994883209176667" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.46936343009153125">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.88472169454644">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8437893699591881">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8270008460563405">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4196218703156409"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.702664976582152"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.10590574311438572"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3755151968742785"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.17451361919246167"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9788145674949511"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.03014693480626285"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7324489684062514"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8941524442361815"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1433729509932622"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.22296261474418744"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7843307058391136"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.558390915014076"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.40716042276625464"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.09273230352141737"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5802893541023171"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7682750558550921"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4589119131470851"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7800438955423548"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
