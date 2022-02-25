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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.10412289907254757" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4870649897363162" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9438263883515596" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.08629221991879077" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5741615842372823" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4960962514943821" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7144111819211025"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.25214511595458" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.41002257102893025">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.40044514041834534">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5835896260442275">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7655366883263646">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9338229566696536"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.21964002624634893"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.15551828634705456"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0028398182772380043"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.04514505569503191"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.09082378281985193"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2013771754061533"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.18076050772479912"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9954703911717884"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3797579638900199"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3189517028048017"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.08993997033274259"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.21887451347825837"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.11878921901832018"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9139354003553435"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9855650718433686"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.012180577330775932"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6301787337299711"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9019852004238449"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
