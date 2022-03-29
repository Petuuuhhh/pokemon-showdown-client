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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.21333617030974672" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7674473657022065" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.267496432440574" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.21917911994674588" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.012193381541911519" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.08945002308822092" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8477596999144179"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9808886297889103" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8610745661175316">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5720935710711461">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8154599214213114">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7010818653788735">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6484015911236627"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.27671901151320544"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7528094218919599"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21531041778830584"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5218447978576115"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.039744463119657514"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2261982813129828"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7413460677713808"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.02173107941157526"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.533758424682278"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9979386861903181"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4748662776771744"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.36858008462012126"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.452150741613202"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8061005937777852"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9807336658955073"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7945607891988982"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6588813778169131"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3524467023051261"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
