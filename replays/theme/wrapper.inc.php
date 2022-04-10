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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.32320101583911565" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9455856832539449" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.12111756190544343" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5233561289109359" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7366790950407613" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8077743014582517" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9176560159375209"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9442651074396291" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5200662158674176">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09906642779972774">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.011582209976316982">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7614425240436695">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24654304936115978"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.74679353966569"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8362585707325811"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4225798868989197"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8912008246968035"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5715993765618117"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5703122501984861"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5385422159275428"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.680915321431538"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.48868207381706785"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5618960096366041"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8497656785337504"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7151812171876073"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6511517503203477"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9012178141015372"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6625914469339276"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.928977326942805"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.654066072424252"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8602374301281857"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
