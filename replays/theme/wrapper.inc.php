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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8856268071777982" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.002818807621678854" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.30096419856141554" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8295505763636377" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.15551420980974862" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7749384892823477" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9909405838764214"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.22703623856619637" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4051186591477507">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3582283286926007">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9231346623629617">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.44702086110551353">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.931467585399558"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.11352485468686058"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.411704373601107"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5637688507442804"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5742773312194385"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5680280412684175"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.37887852014625967"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.13103292143069156"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9398307436748516"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8102862976909668"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.20004261134399237"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9893991952160945"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.08131275822998885"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.30461164023084697"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2370733495828623"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.934100344040147"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.17756879278142867"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5803695129133024"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3752196849818872"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
