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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2691836424140399" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7128464740728686" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6988641323925486" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6839207017341589" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.19283117941952344" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7252397722933239" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.430047977198978"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.12984466111057924" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.753665275804356">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6428239668551232">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9079236444335135">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5199398742539802">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3265784079812477"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.525361694857694"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.72531490600324"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.656809519955591"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.046805751717166943"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6399786472505364"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.40938100260194354"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5843475305286792"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8879754683164232"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6577333056568362"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6332383049460466"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3436356026256231"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5498210755796398"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5076251452742842"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.22039296727053115"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.22308331751939003"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.25307348450813083"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3087247865518852"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.48714345109434"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
