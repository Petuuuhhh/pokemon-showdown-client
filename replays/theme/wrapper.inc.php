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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6009081426325538" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.025866499635620155" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2884839580227121" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8503548609838198" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3487369758883365" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4544633574005077" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7777646677766741"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.43078957359148307" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.27997481031267313">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.723388262463641">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5534608900424547">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8273875598385161">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9854663173457354"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4751375122771566"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.04825884557779192"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.15311233084192022"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.33898264061902905"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6105430041088582"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7930130965716433"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8306301254386119"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4142535280740136"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3120444944558134"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.523041799680205"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.822586190219821"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.023389258683766512"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9169359495098159"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.27802534793654887"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.10735997134790831"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.039578001230869964"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9081757036692764"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5275288100013604"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
