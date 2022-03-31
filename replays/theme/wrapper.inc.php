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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9201775330688364" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3698995817825881" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2848696698421336" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8745877490009268" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.18763001589288253" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6947083911879985" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8715447628876769"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7372622277924203" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08995168872861847">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09695883998980959">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.08902634359981443">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.732417310310788">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.38818309405630336"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.649486839023524"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8351578790893219"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09253828424064547"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.000488490965127486"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14511682964620487"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7252925171827962"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9131234238313926"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9105879931936631"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2978330016502988"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.29710339436888034"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.22698786583327424"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6418458010397003"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4413859763681458"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.14128410095498944"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9770158151077695"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.010647757239241606"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.05229496479879958"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7791082601349342"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
