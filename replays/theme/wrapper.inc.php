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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.22358431249406108" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.14009586590523648" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9801272004989443" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9475085938962569" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.985571974961235" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.576319171712824" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9754396185481384"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.43264472717093283" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11710411801577125">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.19822874735905316">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.11828472512280785">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.584746566268364">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8439240846732219"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.37095607225688165"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4325412401355224"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4449791021902547"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3494608728931923"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.21346296287439093"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4200253506809968"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9093532217234199"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7269706993085274"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1981480570546139"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.33374248343799673"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7731468240475705"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6973478952895302"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9835308252968495"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4612952765794469"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7906616068054653"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7983787581859765"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7899969575073467"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1400011952658542"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
