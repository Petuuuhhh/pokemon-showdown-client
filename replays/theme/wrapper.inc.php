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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.151469609892525" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7382400799600153" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7323987638915979" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6876320501534503" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5388981711655967" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.11646618143500809" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1474774712203144"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8692970157636415" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.41041643282069695">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.29346573200741055">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.25125937274973653">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6955274015127335">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11035203100780255"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5537803338571179"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.999922207786125"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5709580034383526"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7077729519806324"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2552677869170956"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4593059429840334"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.988503192439965"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.14130052026230344"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2421855800157402"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.007848037322689905"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6082630922514147"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6284376649790882"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7330202464677436"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8904855217272927"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8724637660344137"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4660024996355505"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.20106918896482795"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.022934348288921935"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
