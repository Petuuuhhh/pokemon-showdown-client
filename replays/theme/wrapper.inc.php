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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4047334810146026" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8209382402108942" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.004151547629295926" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.759402640777459" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.017805788649065457" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.1832803376269896" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.21433020976078399"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5215996046075357" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11313065126829125">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08351249064608446">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2612672203492685">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8915619495059504">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9616728205863581"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2883260677388242"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8405812274714262"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4585077667714257"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.11330327359922365"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.15752199301432834"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.26229327473187203"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8321419649029076"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.866809284208288"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4946505381978543"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.668812874910826"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.004504779676464121"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.38823327862245893"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6218637216192986"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5643481519806863"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9514017090048366"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8470353759502101"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5352242748997491"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7494534170532399"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
