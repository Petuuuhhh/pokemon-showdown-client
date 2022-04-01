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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.08620028909902788" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.23225241420194065" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.03906979011242662" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.43321542422144876" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.42269123011285026" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.554239458959108" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9832364443624324"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.14432899032047852" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.44254883288035085">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5200797098723668">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9986796433805905">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.18255988704648285">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7021559937080679"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6530554566173417"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9121516930974072"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.90908201322213"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9318829698981814"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5379300785783887"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.10143965427034729"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.442472920301185"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.19529716358533578"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9465773938752324"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9414354798747151"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.28264013446474223"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6042609382028845"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7663412200151616"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5579368845991772"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8904516292068756"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6535314072056322"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.07958535146985968"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4075500794115998"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
