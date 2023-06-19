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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5331734738423157" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.725447392421029" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.651025961795987" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2298155006910132" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.33174559873005727" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7663222151276265" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8970722506750837"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.31666081427017634" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.027195417439011216">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.714709029099891">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.45216271456202883">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3156467182445788">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.720844937269334"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5335879776944155"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6646123650505367"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8309115125079913"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.18798915236156133"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.48945553314493395"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9934761166672272"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6953855981629253"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5313323458357966"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5381981971566578"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7322891627944965"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6684668779210647"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.0379064203659456"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2888743781502654"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.46864369127206174"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8475481155079863"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8669283925240943"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8477028441063947"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5354803269605526"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
