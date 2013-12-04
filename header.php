<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<?php
	require_once('scripts/Mobile_Detect.php');
	$detect = new Mobile_Detect;
?>

<head>

	<!-- Meta snippet -->
	<meta charset="utf-8">
	<title><?php echo $meta_title;?></title>
	<meta name="description" content="Though I am a front-end developer by day, I have put pen to paper during a design process, been completely lost in a full stack environment, and have even worn the entrepreneurship hat.">
	<meta name="author" content="Michael Ngo">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:title" content="<?php echo $meta_title;?>"/>
	<meta property="og:url" content="<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"/>
	<meta property="og:description" content="Though I am a front-end developer by day, I have put pen to paper during a design process, been completely lost in a full stack environment, and have even worn the entrepreneurship hat."/>
	<meta property="og:image" content="http://hellomichael.com/img/opengraph.jpg"/>
	
	
	<!-- <meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache"> -->

	<!-- Styles -->
	<link rel="stylesheet" href="css/styles.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons -->
	<link rel="shortcut icon" href="favicon.ico">

	<script data-main="scripts/main" src="scripts/lib/typekit.js"></script>
	
	<?php if (isset($loadModule)) : ?>
		<script data-main="scripts/main" data-start="modules/<?php echo $loadModule;?>" src="scripts/require.js"></script>
	<?php else: ?>
		<script data-main="scripts/main" src="scripts/require.js"></script>
	<?php endif;?>	

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-20775561-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>