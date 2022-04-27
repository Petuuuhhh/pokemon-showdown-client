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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.16534532056822315" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.40568959464997434" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6073822783984515" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.17732415430374382" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.36702107448439025" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8417347259453392" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.15480144935951534"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.07671426398348791" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4055704268720761">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.38285828682233647">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9236028090259627">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6218173584731008">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08881013369350432"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.17939515621354052"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6911627704403371"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7754222581252199"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6797529274889136"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.006818224313475119"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.23835272469733293"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6260493532729654"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5935800125388973"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7421144891035691"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7587146648236425"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6008895514895787"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7285201407077866"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.00375332108209947"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.29044949271890164"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4313174657398282"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3925659955986103"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.1902319466006024"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.0018183387496590875"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
