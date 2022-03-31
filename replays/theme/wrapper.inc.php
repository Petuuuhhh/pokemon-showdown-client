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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2573238581755115" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6903186515434276" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7407948136160685" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.16518809242871635" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.888866717173995" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4558269667695001" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9522207253487582"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.11575515328113539" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.48972232044727027">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4205229335257483">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4292636490957209">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.30107191731863225">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.07053294171298607"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4784205133993651"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7907788315932953"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7025648373286033"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.40373791704828577"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.18384098800070747"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.09634641598928262"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.16661895677232996"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3227503749412741"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.802421773470894"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6418293992663142"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.33806195840295916"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9042558771197755"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.39011214028926977"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6381626315375224"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.24150991315255843"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9600954555310761"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9806844233917322"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8332617113307375"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
