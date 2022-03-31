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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.26956142025429064" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.039936313743490715" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.911576825378694" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4669080473893654" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7003149006591889" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6931136202458235" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7562216239740425"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.855801185559645" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5452775438702027">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09596422690755801">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6429052611700452">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.22038942781958215">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11623078642698248"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.39535048633045977"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6714489250749853"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4115917270825602"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.360955073901867"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4115705920361581"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5015436063368839"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.05935155136152037"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.06731386409907847"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.12647572085992587"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.766474599681658"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6681583297231914"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.13761464320350814"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9106755708718794"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.21792745488855703"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6637073117322576"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8072162049490468"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3409100994628156"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6871935380840759"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
