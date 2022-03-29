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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3141154026449502" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7743129560528672" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7543028999520511" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4709603188975411" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9027528011132957" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.27652953250975565" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7405525577576653"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9427415179261949" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5752975789469998">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10708599978713407">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6250773855319454">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.1369931215836575">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5260466363949299"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.14260715303442417"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4966597394347876"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5862968925854439"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4366831215895215"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.45115429658357753"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.08866751660805705"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9662161556005966"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3807612064174106"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5292067608574131"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.910086638746251"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7437244439022832"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3358067289965223"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3698422560671095"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9791459971818255"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7340529113680712"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.0789012114716312"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7592314991717588"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.39316650609683323"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
