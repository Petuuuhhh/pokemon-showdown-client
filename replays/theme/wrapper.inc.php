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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.769384898744579" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.48861504268767786" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2088301836451001" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6850746753646955" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7141821592813475" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.35964992905725457" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5284402880370853"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8458719271559818" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08176318329524856">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6132290738633799">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.13533278308674768">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7741304004821936">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2166741881515324"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5479914532403358"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9063542276714305"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6165561646218101"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9871216460095449"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.16654721449680898"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.32248777365057557"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4700903894767918"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9442316123175643"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1439643712736549"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.08573648359977293"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5735473204330008"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9869447329711498"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7497813485279825"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.22622579088792438"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3567377167258876"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5877486415197943"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.17832528078593501"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8664885042278812"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
