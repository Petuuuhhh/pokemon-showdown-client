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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.460253318649708" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6169534940840224" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.43183332992946344" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.10439955153128322" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.10759275394642098" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.23939171269394355" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.48407845068043853"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.043692267287263054" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5273985824320964">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.43122218655509315">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4051818320850742">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6770398190984919">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7790403429040755"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7516063052830415"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.62684698752035"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7926725945379289"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6780085298312237"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7436834392708176"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.24957706597296925"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9268439322543569"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.04631910914409576"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9135825706158174"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.18173608777065242"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7268494951792999"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.99034600382508"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5095303980145354"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.962802235760702"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5895817144269797"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3519842897357164"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.16475163718899966"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4728078885223519"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
