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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1564641448784163" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5511372657906974" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.05218001094662683" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9089133035780983" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6150628889473757" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.04554301428065388" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5961668557762996"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4094675760211761" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7972823662393271">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8838221163206819">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.15097177447496746">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4113223169264708">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.20511358762456888"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8261938757776075"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.24034546060300888"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.14789876893871812"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1599279868731882"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4566540093128111"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.09035304710961656"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.03774087616958832"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5334066851161918"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.944090061143638"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.13267330491437557"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.32702380601903824"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.444957734860143"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6805936751850876"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9126508489438314"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.27651810707510904"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.25033437437223016"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7955955031505597"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8412615493387183"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
