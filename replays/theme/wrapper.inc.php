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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8383408601392168" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5890621725513276" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.01681056810199144" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.40053045192341163" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.002525852238497661" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.47293247247313275" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3035626653616412"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4634920666051312" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.42081121386485054">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.30948428164890673">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9750003652181498">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.70255840079567">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5601472580577478"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.0008414073530182975"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9843882859321604"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7405419655327437"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8364475479861231"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.18989340735728133"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9801747930786813"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7802450721176766"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8873817764578362"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.12281110691726571"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7420475788773429"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3577676979196014"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.14832279253543712"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.865282373469711"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.39215905783871063"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2465919883822465"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8670051725058454"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6483090255120474"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.21590021963965844"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
