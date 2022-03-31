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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6656174688025256" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7274076517382728" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.37963288346712165" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5720297439986173" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.25568040561330885" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.24308811745075132" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9775362636149658"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9799191052430598" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.014953137942620875">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.20128831759188448">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.430470748992015">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8351402918326227">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7671989796798371"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8695028793214488"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.02667368768834466"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9600290272059187"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.37127419379938353"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4345692125791485"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4828982705569036"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6790952354093642"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8473479816124221"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1385469838369986"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.38739771800486444"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9334448197290821"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.04755026193428846"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8579100637106425"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8099590655959805"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.1915087875681134"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.581007291976402"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9850180566139302"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.830109087788425"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
