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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8928725977146452" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.14349085589531385" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9878120705429658" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3580589908874321" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9868407677445992" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2966240555534214" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6715319290084016"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9682382456231826" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7197625508807162">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08631567355179959">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7895210256188576">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4065734986572318">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9547762081044202"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.14893325900123022"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8255842929163246"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08778785308864356"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.017422050859031035"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8752102786698446"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7628785554342283"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.08360865253544825"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.17175578969754768"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6892578075283196"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3436003683552866"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7186260598001719"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4535775874319954"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6212137178189667"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1693616808648366"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6835725431489206"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.24768528100294573"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5197939968341079"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9802115264284108"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
