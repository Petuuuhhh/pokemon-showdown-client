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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8508698256357443" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9013109863372892" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.36647217103707797" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.24612289873217774" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.09826093724295748" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5085721780043544" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4434040685096772"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6643760621806358" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7285597776443087">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.12186051143385179">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8470224726015727">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4457847727365325">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5442935384890195"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7359242761409996"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.23813963484640088"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.12860853993161636"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.36554554177325693"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7146122211287673"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.47895629050642907"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7116237255989717"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.16507767464458145"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9870865796101906"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.19498072895130392"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8816821784394047"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8763655647757949"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.39931898183810843"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.18447573918311955"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7233459875808346"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6773851194842129"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4167456025824334"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.03935751963215428"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
