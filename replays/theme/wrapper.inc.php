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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2853155656670596" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.11406646948149302" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.17072814682246884" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6498282630284204" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.07887203706059287" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6183434930286145" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.03615743072247879"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.002524684967979862" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.09726680117199016">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9562750964204478">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3735830427819926">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8640523508066731">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.34062717372351403"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8163694566975215"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9305412070706331"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8921236817992375"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6605476901393614"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3693418595767515"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5297434851702885"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.42665132328895794"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.32605847430504076"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.10521950045609696"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5265056860481281"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.45905314834537725"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.965980293243035"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8683082296189342"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.006659288293052956"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4392243249102441"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5456018421861728"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4164286336288274"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.10071766050407138"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
