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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2574584102306101" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9026068236770675" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.543960354162393" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3771437466449037" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.2634625028562205" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3919210767687116" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9171032672200268"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.799945504569755" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3906046477800702">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.41161725223440726">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2237591985201004">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8889740349333304">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8076485489034899"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8279584639908546"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5790261668373262"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6588827294230053"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.11491824779080351"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7147605434240025"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4286260335575076"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6961082711143893"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.17005311885213348"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8773849574513342"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.46399423380515126"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.33245739494982174"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.21928073276904447"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.029294778721691284"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6962477627098473"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.005424225764202761"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.40770004457123155"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.31707229842128126"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.803117031663863"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
