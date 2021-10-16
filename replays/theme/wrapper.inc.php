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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.02113070876260248" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4266002293050124" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5759326197096151" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3549118808550953" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3927843184905493" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9056941091795108" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5572207038937291"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9814524139471108" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0454441896953528">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3946417076022648">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6491210202402373">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9257390721880607">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.27668774687629494"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5002842146110074"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.49548038470684097"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6120220880991993"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7478546337399625"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06555213922919623"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.12315543751931823"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.577182246628891"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7879216996667595"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.03962830469062406"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.1404257865555687"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5215190259436102"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3812982774909701"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8581512270924969"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7108306958295056"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.24124006349134497"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6437107533903865"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7911725433111125"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6151423394798174"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
