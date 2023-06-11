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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2091655153357852" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8742652368347443" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.648930108356994" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7077551841518739" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5271121961993934" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3094215974742518" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.02545449848338932"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.03528991375521584" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.952569363797914">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16750178495260237">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.331847376090876">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.26392164710517707">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6252673526508066"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3283491989406824"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6022743499814336"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9464296383835558"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.22330132932599178"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8460750672883623"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2479224050284885"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6859370807475709"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6384270431044077"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4142928602986473"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9873835098217285"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.35109291186973035"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.656407839236816"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.1635798029806559"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.570896515528172"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.22519093862566786"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7213353007853185"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.05089992845197289"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3217414505549394"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
