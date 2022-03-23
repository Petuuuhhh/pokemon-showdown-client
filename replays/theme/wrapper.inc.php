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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7696310787141867" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.039454137458000416" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6187819621831734" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7566010159226018" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.26204778105122206" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8141605047450855" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9258856170342675"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5781088688325691" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.008747993396056586">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6370040414936193">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3821812574625314">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.08992443501707603">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8124903110666408"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.15433526014563914"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.34000596379163817"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.38976729815443134"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3583428186560409"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0679364395905715"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.07243971169259078"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8748333286970553"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7664405150779854"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9127618011164997"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7949867127965347"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.36931019865360737"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7209402534661249"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2615341716282469"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5288812504601506"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4474883932159499"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.0744572760986606"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9788929946256766"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4387517691455345"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
