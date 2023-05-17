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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7155873906061867" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.014265799085761977" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5277674438217335" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6686880810053575" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3347101777824759" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2599706333378755" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5238853177282661"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.885726588863111" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.003605650883157674">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5760053923146506">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.04857714472495167">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7743109879737267">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5520992609685187"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9938279041179694"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5199884130273464"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6059632153886614"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8117155814271277"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8220580251049736"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.024338973464014924"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3240113885757556"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.11060825390727191"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6475298308762312"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6421078583028048"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9594870749958557"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7141126278181869"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6513723012477646"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5955577531825695"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.060755991019560085"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.48675381176942767"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3976779090450011"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5359796957930485"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
