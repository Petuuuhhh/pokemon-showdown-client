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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9184452414727775" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8770649142095817" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9845600088964634" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.19651140960525226" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.737174802906498" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8690067904800804" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7007609389937008"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6626913271397694" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.903682469194824">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.35760868596390405">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.06700058932830855">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6127867505228972">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7866103968816462"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.07577112638191852"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.755959404508894"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.608931217811356"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2459885350496298"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.27756629981234293"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.021777926195789332"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8657156969457225"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2565476417689805"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3818206775688535"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.09144571026815163"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.04929643603196632"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7101487732617089"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3547615872285299"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.09857761400416298"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8034767575395616"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.29590840604950386"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8185328654856052"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.14123400972378852"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
