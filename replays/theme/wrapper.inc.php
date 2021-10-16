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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.04552129339880273" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.57687745201026" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3088272619178589" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6892790109078011" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.22164079909060352" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3315868210838637" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7583720304450119"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9568486670945577" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4503028716857518">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3436589018842835">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7541993733869721">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9826007398710455">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.31246298057705624"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.19394344362120153"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7382988647346824"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6186869231849159"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.06801750606048751"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6679659066508885"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.48613343010430476"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.040396077958370746"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8410042083859137"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.930349016184409"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.976764293115495"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8016712484463431"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4217656090907349"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.49407659132175574"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5342924135119411"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.36089213698818856"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.43916006609048974"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5236014919447549"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4973332328794704"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
