<!doctype html>
<!--[if lt IE 7]><html class="no-js ie ie6 lte9 lte8 lte7 oldie" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js ie ie7 lte9 lte8 lte7 oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie ie8 lte9 lte8 oldie" lang="en"><![endif]-->
<!--[if IE 9]><html class="no-js ie ie9 lte9" lang="en"><![endif]-->
<!--[if gt IE 9]><html class="no-js ie" lang="en"><![endif]-->
<!--[if !IE]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<!-- DNS Prefetching -->
		<link rel="dns-prefetch" href="//ajax.googleapis.com" />

		<!-- Document -->
		<title><?php echo (isset($title) ? $title.' - ' : ''); ?>WTF is My PageRank?</title>
		<meta name="description" content="WTF is My PageRank is a completely free tool to easily check your Google PageRank.">
		<meta name="keywords" content="page rank, pagerank, check page rank, google page rank, google pagerank, check pagerank, check pr, pr checker, page rank checker, pagerank checker">
		<meta name="author" content="/humans.txt">

		<!--
		Yeah bro, viewing source code, like a badass.
		Feel free to dig in.. Everything you'll find here has been left fairly
		readable, and I attempt to keep everything as documented as possible.
		Enjoy your stay, just remember to close the door on your way out.
		-->

		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS: implied media="all" -->
		<?php echo Asset::css('style.min.css'); ?>

		<!--
		All JavaScript at the bottom, except for Modernizr and Respond.
		Modernizr enables HTML5 elements & feature detects; Respond is a
		polyfill for min/max-width CSS3 media queries.
		-->
		<?php echo Asset::js('libs/modernizr-2.0.min.js'); ?>
		<?php echo Asset::js('libs/respond.min.js'); ?>
	</head>
	<body>

		<div id="container">

			<header id="banner">
				<h1><?php echo \Html::anchor('/', 'WTF is My PageRank?'); ?></h1>
			</header>

			<div id="main" role="main">

<?php echo (isset($content) ? $content : ''); ?>

			</div>

			<footer id="footer">
				<nav id="menu">
					<ul>
						<li><?php echo \Html::anchor('/', 'WTF Is My PageRank?'); ?></li>
						<li>&middot;</li>
						<li><?php echo \Html::anchor('faq#what', 'WTF Is This?'); ?></li>
						<li>&middot;</li>
						<li><?php echo \Html::anchor('faq#pagerank', 'WTF Is A PageRank?'); ?></li>
						<li>&middot;</li>
						<li><?php echo \Html::anchor('faq#else', 'Anything Else?'); ?></li>
					</ul>
				</nav>
				<p>
					Created by <?php echo \Html::anchor('http://ninjarite.com/', 'Ninjarite Development Group').PHP_EOL; ?>
				</p>
			</footer>

		</div>

				<!-- JavaScript at the bottom for fast page loading -->

		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
		<?php echo Asset::js('//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js'); ?>
		<script>window.jQuery || document.write('<?php echo str_replace(array(PHP_EOL, '</script>'), array('', '<\/script>'), Asset::js('libs/jquery-1.6.2.min.js')); ?>')</script>

		<!-- scripts concatenated and minified -->
		<?php echo Asset::js('plugins.js'); ?>
		<!-- end scripts-->

		<!-- dynamic variable javascript -->
		<script>
		$(document).ready(function() {

			$('#domain-submit').click(function() {

				$('#pagerank-response').html('&nbsp;').css('background-image', 'url(assets/img/ajax-loader.gif)');

				$.ajax({
					url: '<?php echo Config::get('base_url'); ?>ajax/pagerank.json',
					type: 'POST',
					data: {
						'domain': $('#domain-input').val()
					},
					success: function(resp) {
						$('#pagerank-response').fadeOut('slow', function() {
							$('#pagerank-response').css('background-image', '');
							$('#pagerank-response').html(resp.message);
							$('#pagerank-response').fadeIn();
						});
					},
					failure: function() {
						$('#pagerank-response').fadeOut('slow', function() {
							$('#pagerank-response').css('background-image', '');
							$('#pagerank-response').html('Looks like we\'re having some technical difficulties.. try again in a sec!');
							$('#pagerank-response').fadeIn();
						});
					}
				});

				// cancel the form submittion
				return false;

			});

		});
		</script>
		<!-- end dynamic variable javascript -->

		<!-- Google Analytics Tracking Code -->
		<script>
		var _gaq=[['_setAccount','UA-24176682-8'],['_trackPageview'],['_trackPageLoadTime']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>

		<!-- Prompt IE6 users to install Chrome Frame. -->
		<!--[if lt IE 7 ]>
		<?php echo Asset::js('//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js'); ?>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

	</body>
</html>