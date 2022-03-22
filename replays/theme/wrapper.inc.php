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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7089788987288386" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.16801546468080697" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.12100845599807686" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7590858897493693" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9616009194906983" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5496761467356974" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.345447198931524"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4567085058408369" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3630798386715932">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5915120539527035">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6159614725917979">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7170511173651442">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7552215957133028"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2041195940829501"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.48493296336521574"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05917922000620868"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6524244342140242"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1324705527128176"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4896386841799667"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.17282526966126177"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.08825078976406875"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.29401343405646574"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9046611461164806"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3082027296579781"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8696692547881706"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9908519303076835"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.18363726699334082"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.16319155479891667"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8125110672636648"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.053542250976302164"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1588942953847936"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
