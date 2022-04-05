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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5845113999555835" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.49527409875258344" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8365142630891238" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.20924956979923715" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.24558828650699494" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.24678566511081534" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6281169211720394"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.39703035087328686" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.039993859512673424">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6240433381748591">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.0210506397408885">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6974094101096835">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08668144133552791"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3229322387238698"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7041655708444314"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.39157599342023497"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.12591099005971618"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3017239613546605"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8776454393138413"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8089836102613874"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6516823216232064"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.520109406164897"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.23145211892761441"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5898045490478161"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7469981995055599"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.09232845827667369"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8903272503334314"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8154401949402705"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.13103128348223936"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.12172161712562324"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9758954976973024"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
