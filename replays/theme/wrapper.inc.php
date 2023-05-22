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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7978045711303476" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2748725595760575" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.05072766850730637" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4709695811382235" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.29564967740318493" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7161626240280341" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5204367012537845"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.1245836231566293" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7234673667308407">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.35291945772974476">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4409033747847333">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6338260810691634">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.375873052813803"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3918981133762436"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2589012711196157"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9713506543744854"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7408438954928047"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.16938906084518912"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.40522908478983943"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6395647448273858"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4400519973729151"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9156201153450731"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8530576530040062"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5395987900644008"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6027664887007402"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9918352279439884"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8812750010929495"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7290827812811471"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5061352079140438"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.18223846962799972"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.18811316746954665"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
