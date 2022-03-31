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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1057092624746494" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.34641065462311293" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8636681580554162" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9006220564341265" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7775155290095053" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.05110361267244601" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1279524466362536"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8780191899597223" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3611913455893705">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08672042680295333">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.16917924631564696">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5029805590153298">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8349389425472582"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8151460317032502"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.12923194655511594"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7733479981587548"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2561113412949336"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7162600994164547"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.18718073943314417"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7199710760752094"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9865901969214037"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.38717498251377336"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6139137757235265"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.11933146450687593"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.270011755977589"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2856253471935566"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4870774078606199"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4763821719017227"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8105858316552834"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.23099917794066793"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7053656877013474"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
