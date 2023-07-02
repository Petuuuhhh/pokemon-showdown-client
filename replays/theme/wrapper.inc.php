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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.03597366966992621" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.19511009253387934" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6123410035021595" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.525781294172827" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5886194170238144" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.869916058386486" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2738069361166753"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5309121754316377" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6444392674756201">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3370529959669264">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5092429448507512">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.00042698721373946036">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.34049139424398156"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.33261180021450465"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.03696883259310835"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4353964566958861"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5566021094521483"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5668439194987793"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5353090271452994"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.34928134152893175"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4199239890454647"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8288565756616557"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.795309478516939"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9269394813991252"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7909344344666316"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7080331530613697"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4924861198099484"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.36991984670987477"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.19351650083785388"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6967595654564258"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.049647636423154395"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
