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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7519548854788696" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.11161406667941076" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2508986723408664" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5804136731850038" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.12315151615195874" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5552592301794128" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.03584940384921498"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2737356131472042" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2509710858601517">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.254234585550265">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.48450618848932625">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.0442272677600537">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3221373731162305"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.40257146869250593"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.015357281356237484"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.22408704354426479"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5985184477379786"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3573912359295839"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.1150936927658266"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8535900845017212"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.29348618389426173"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4809733529188036"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7065894030455115"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5980436014272053"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.41777757137793925"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2423767810214792"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9537679705919553"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6964728200876706"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9510553726547055"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9062699867449198"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.24708117741404534"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
