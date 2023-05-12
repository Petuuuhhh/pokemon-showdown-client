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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.851294708936708" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.12151126037000526" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4523977884766419" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.15617028400080213" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5566289249500209" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.24789078111721286" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8110842102497664"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3463165352563411" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3839101741553024">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.04010488869165618">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5368893004235267">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.15768428678073065">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8287642547035778"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7528696343223784"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8552043207370548"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8199957365751189"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6488078446670249"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7675715328893096"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.36185243668610134"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.11717564106715206"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4107830712824916"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.16523496741639265"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2248495197461553"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9462721208065004"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.23212134133330542"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.25742465662983394"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.06977026692507193"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4810713730361551"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.482792623987633"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3006583807450671"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9402302242184004"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
