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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6669754381909601" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5608125769115577" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.25957994505785975" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.43880364192538157" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.13619399861498915" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4178794885283166" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.44429483711940176"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5202760242239783" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7959949072895349">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9898711087272105">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2372932480961394">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.47176262413721926">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.968127691967724"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.47968422894799034"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.11161810976208542"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2049799347991499"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.005265851366172969"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.19165051178528647"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.691212714057325"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3799180838420573"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5227195417419683"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1343999835567511"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4168829680429511"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.33158112885299107"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6430966383699375"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6236908956947775"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4238626172474431"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2656383175213972"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.05240573264199955"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.19593482988833966"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.46269646715137114"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
