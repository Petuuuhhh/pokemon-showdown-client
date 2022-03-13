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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.10454701131497779" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.777221139272015" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1568721477466033" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.38450998658751323" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8355748204919915" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.21451491183902371" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2359287587022012"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2427122838230502" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5349645068433369">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6938385997459038">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6327433104587263">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.051454796121469526">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9056095234136872"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.043695316573193255"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.22211251600981896"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.953419659229596"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8913557719798757"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6144318047295547"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2657537746359795"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5163809496206213"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8029543225274045"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.662175878990862"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.0966812953303775"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.16995973641748674"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6002858481045705"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6360229332859819"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4731506418289113"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.867254736815122"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.47828815753253595"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3133910839956717"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.761233438118031"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
