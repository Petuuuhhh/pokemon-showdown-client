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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.056136699738195794" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9998075985938679" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2860411072981044" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6088832826735904" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4572206325433057" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8246795226840085" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.12905675503831304"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3280114689534428" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2323111638140012">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8093868082869222">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4395270966049676">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7895906519077258">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5289867212081061"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9584151171505324"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.45181906298113117"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.49884378596585943"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6590388587948202"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.728645018088953"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.15684392773319766"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.41690885651830456"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8036754797829657"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9065806041814835"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9430932797378855"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.46706502834191643"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7046666380962736"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5567996862784521"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6230029638725716"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.368063606230987"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2765097057222363"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.30894033233658513"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8012944185143511"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
