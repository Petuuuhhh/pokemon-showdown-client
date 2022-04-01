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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7118919258768126" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.03662842718563697" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3995129880946957" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8052830253749366" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.24678559196126915" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9360230111435388" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5105296755211399"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.21153048940286534" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.28805255757717174">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1452240174226782">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5124455614700225">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5920757286090901">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.01720381567899576"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.048857763155911726"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9818646850725836"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5504634954011036"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.208222897254845"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.12910706953017548"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.12040019527506396"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.0682591417113696"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5716408034730351"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5220609933820188"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.130825902595479"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8845179410265198"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.11601017351629328"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8931568988928327"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6263890682244944"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4674700737575299"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4792884203013188"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.35733799188935933"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5517845957255385"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
