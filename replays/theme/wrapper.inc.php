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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.16610926373289203" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4417847161519646" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6403771603673025" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.45083566085408555" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7887235998343047" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.24842256544979358" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.09895836521988466"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.33396309041429584" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.058819563661286045">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07451358874670988">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.818423366919216">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.016995522569828614">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6293142385679151"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8196024245449465"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5945734870584083"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.06348304154523521"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.04558235587062387"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3476647450218504"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6852035512030257"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.932949673726855"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1262850025243829"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9368524706588628"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.19154393604688735"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8780919602547259"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.32850748573194943"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.21043485451973276"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.21310512315563046"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.969650624047105"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7935432221580228"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6092387032288902"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9542480281580079"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
