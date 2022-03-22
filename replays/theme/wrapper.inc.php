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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3531720493134187" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.03265449869226433" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5618922551756422" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3018272867210381" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6012930103799032" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8278627429470002" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3509584757717452"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2756664513816298" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8909275510116428">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4413246896496523">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.032416774260646264">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.16714362171296937">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5453955722523567"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.714005004439509"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.37295131487122446"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6074657971951236"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.37558348703353195"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.08254801413111834"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6536271359432368"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.927779838427155"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6094082402212981"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9299752263217782"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6678067263668344"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6666886724042558"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.42453472920025126"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.06959245718276241"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.29725792324398737"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.10547319370689712"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8948858613407822"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9654530329587969"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7724772505203814"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
