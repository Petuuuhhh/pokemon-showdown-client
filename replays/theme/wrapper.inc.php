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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.10329613417481798" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3809331014948536" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3911534696086869" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.13033856683553546" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5103784538068175" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2433467645866978" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.18078488979590124"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7298217615343905" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7065148503971863">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6445188126319394">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4599748132202981">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.023407677540750793">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.34317817161420683"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.720733036587839"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5978613450833232"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.12052014439357794"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8322906879591006"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.025288200795817506"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7739365199969699"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8534307601583861"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.14313485892255384"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.16897485667070478"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7543799648894927"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.39095265338966234"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3191032357183299"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3679495358740956"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8154563751322095"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.0534923687840001"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3627449877906699"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.16696828409328868"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7094673830964189"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
