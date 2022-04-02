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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.41472421523508385" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3987180337558385" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.04440474854917742" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7651426413434264" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8118490015245725" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6509228547071342" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1420508982463482"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.47296821881107065" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.30270028869001875">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8281613441282487">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6053366677528047">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.32494999368454547">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.054910633637172745"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.14546936383004416"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3498123226431462"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0843303693230022"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1627810475033793"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5430805344329128"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4917259063999595"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.30696221834572257"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5876686149381822"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.019473774402682498"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7467438195155573"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9110800413954401"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3316376222938955"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.476730916565272"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5128339145526277"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.06315623662045411"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5964343602785303"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9132144904229262"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.13584271987416918"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
