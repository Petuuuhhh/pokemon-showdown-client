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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.21858110170098222" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.09910352589132954" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8393907511061778" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.011082625676399616" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6947316405958526" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3065835225638196" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.30058058506808694"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.23677828818308688" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7037015875296835">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.915033624754253">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6126504851507375">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8736441923794249">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8831047571193984"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.778016922340619"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3025612124684953"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.36662505171964943"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9357675309910913"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9526245899218946"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.25475601730977226"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6274294939210383"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.28338797816267336"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.04110013069084073"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9734896101275075"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2350709213041482"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.12576793374540518"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9253517319377784"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.41807754702822697"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6683938712802096"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8279800507773207"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9271052580946066"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6466543204941879"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
