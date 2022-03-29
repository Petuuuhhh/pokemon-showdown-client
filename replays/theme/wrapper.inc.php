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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.044258471001425104" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8058437924272033" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9098263000873907" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6683699552595459" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.37775565836013536" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5306041596833924" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.012053119230916565"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8663942036437611" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3117737253376376">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.35624155829743454">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8301584424471806">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.881610206340306">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4337603274007569"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2823465797050959"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9273528802075013"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5701272733616409"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9483674235473851"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9798230649584516"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6373130880445876"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9803520008193369"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7621646648108249"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7974530410731215"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.820707185719604"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8556676829197936"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.35778681305824134"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.402145612245709"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9146345664076592"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.36413488624709744"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9609383647672947"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7109772102943503"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9258486838205029"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
