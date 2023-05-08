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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.21226986589895613" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.45857997164433173" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.903330521866597" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.26028702432761697" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.15744060914736524" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7808005423550142" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5888865559495522"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8939689053090834" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2715860864208448">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9079792840285219">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6019623540007353">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6718475639743982">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.06083193349821747"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.39324185288512914"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.22540024786247304"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.25593699357264366"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.08991401605161031"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5334422430279069"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9441797054582561"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7005146492423955"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.037652169941086555"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6942735963035063"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.19882804667260023"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.28794691475045786"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8629077261853015"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8793353383902247"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.25005453730426264"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7596688733437154"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.42326938273819015"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9458938073449208"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8120336912621067"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
