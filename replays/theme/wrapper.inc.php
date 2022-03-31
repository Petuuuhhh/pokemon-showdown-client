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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5590452243782962" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7879354419358282" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.29834318663721193" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8829410559814421" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7854023461552735" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.050375241781224656" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8635641452413856"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6296679306659336" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6243072617540346">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13104297194402847">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.14774866194799974">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.03301144213333762">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.053185954799386925"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.08170641261014944"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.09271968099955608"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43465631272453664"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.571877469598657"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7739892280796694"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.16367274413091537"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5832251881003399"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8777180146902648"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9516660600716556"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6681817435305635"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.40517404632696574"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6077868152115533"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8409527742301655"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.06062486923927768"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6773667883430103"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.46831689262984777"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7297078819433043"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4395014930904797"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
