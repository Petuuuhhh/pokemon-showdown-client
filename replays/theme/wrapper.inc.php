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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1082931637217186" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.045013423554468135" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5189492203739197" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.24871715203254152" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8209354175973627" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.18648848042173505" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4228791677539241"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4629988919391732" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7336483751837153">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5837822370920029">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6195590124586792">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6584015653437465">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.01671805340779553"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9803378983589959"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.37657149081914953"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6919006312704892"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.983981152357527"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5596825804116805"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.06240051767994248"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.34092746301283605"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.08698610168888998"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3459077000424422"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6267769256328677"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.51284736194169"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.12683642062949163"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.48851309634992535"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.17451327380629755"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8075092579730574"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3867101077541255"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.40546796263410245"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.09093464280280861"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
