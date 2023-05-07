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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.31251129671784805" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.10315577272954202" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7026065558729322" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9127813876151631" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6837879370407023" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6287332653668745" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.023130183144160377"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.11886951115067834" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9108936724764565">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13609681536251128">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5834135258294071">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7996967412566107">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.45823146993097064"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.36201463889100793"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3536162913748737"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.41435640129410656"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.26524429928905513"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.226679095976571"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8770656107950219"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.28144950538539093"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5132849421001713"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6722339873601026"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5549802339557621"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.05033447542155711"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9457475472833359"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.88965214660581"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9572887293987531"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.38731055984341567"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9958765994662779"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.21356936333763854"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5491731487186879"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
