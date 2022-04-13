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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7141676026086436" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.28299448822238116" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8393007705416733" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.24000425816960425" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3420325201650889" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.36053540869695566" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5408043273225749"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5815074755299521" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7406730219722397">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2559407245213634">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.04672944170283966">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.31125211988771206">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.41797270595303004"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8405795039695929"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7486683147009328"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.28141786184955997"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6532884019509959"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9228042378280841"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.044313460750427636"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8337983126247885"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.24007378675554492"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8695032850683315"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8457269945126604"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6403536377335997"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.14658789285989893"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.19891198934665244"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.46820132466595976"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2127525151031462"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2568804027545395"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.360797425690375"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8843451738278918"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
