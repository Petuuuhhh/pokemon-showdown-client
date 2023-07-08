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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6290847994040576" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7214826874218108" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7155258276399845" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.11740232332106237" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3711113883834116" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2818566603397221" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.25112990635695676"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.05536449246861652" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0980747153464081">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.38702529116414874">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9639418780782467">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.10189635295927402">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9412220847491164"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.06696474354774007"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.03303359897817115"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.037522204590407116"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6500025575687423"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6694135687493534"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6078115211015447"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.04082289091547198"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7292527162259288"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5616295631147925"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.862182606829033"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2552408064481426"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.22513051529472494"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.680070619528967"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7405361133436461"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9633436077701549"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.45804563085441674"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2632336321927635"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2938016043475642"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
