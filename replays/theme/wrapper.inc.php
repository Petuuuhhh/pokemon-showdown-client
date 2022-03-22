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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.43665266377279655" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8453002297510006" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7099484214897229" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.12453239515135306" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.07033487799224303" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7829218830697393" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9215303890048403"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.14789724645460534" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6885649554612847">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8982091473445801">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9816356520033311">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8945431689457533">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3041217716351885"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.16502839461681273"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.32165923236937166"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7530219222557564"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6975393444589608"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6277080564300062"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5394107812141151"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2956192945312859"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8301528791196309"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.47323571427276434"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.48828468501131206"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7149091601050586"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4648302481419404"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.314352699326945"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.05962159194536798"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3985318212002553"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.46946204519904255"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.37240329454171106"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.45238343845276763"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
