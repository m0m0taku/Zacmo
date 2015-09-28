<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head>
section and everything up till
<div id="main">
	*
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<!--[if IE 7]>
	<html class="ie ie7" <?php language_attributes(); ?>
		>
		<![endif]-->
		<!--[if IE 8]>
		<html class="ie ie8" <?php language_attributes(); ?>
			>
			<![endif]-->
			<!--[if !(IE 7) | !(IE 8) ]>
			<!-->
			<html <?php language_attributes(); ?>
				>
				<!--<![endif]-->
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="http://www.tisk-vietnam.vn/fav.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://www.tisk-vietnam.vn/fav.ico">
	<?php 
		include_once('meta.php');
		$page_id = get_the_ID(); 

		//echo $page_id;

		if (qtrans_getLanguage() == 'ja') {
			$titles = $title_ja;
			$descriptions = $description_ja;
			$keywords = $keyword_ja;
		} else if (qtrans_getLanguage() == 'en') {
			$titles = $title_en;
			$descriptions = $description_en;
			$keywords = $keyword_en;
		} else {
			$titles = $title_vi;
			$descriptions = $description_vi;
			$keywords = $keyword_vi;
		}
		



	?>
	<meta name="description" content="<?php echo $descriptions[$page_id]; ?>">
	<meta name="keywords" content="<?php echo $keywords[$page_id]; ?>">
	<meta property="og:title" content="<?php if ($titles)  { echo $titles[$page_id]; } else { wp_title( '|', true, 'right' ); } ?>" />
	<meta property="og:description" content="<?php echo $descriptions[$page_id]; ?>" />
	<title><?php if ($titles)  { echo $titles[$page_id]; } else { wp_title( '|', true, 'right' ); } ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dev_reset.css" type="text/css" media="screen" />
	<?php if(qtrans_getLanguage() != 'ja'): ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_vi.css" type="text/css" media="screen" />
	<?php endif; ?>

    <script src="<?php echo get_template_directory_uri(); ?>/js/dev.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.js"></script>	
    <script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-48465588-1', 'tisk-vietnam.vn');
		ga('send', 'pageview');

	</script>
</head>

<body id="top">
<div id="loading-page"><p>It's processing... Please wait a minute</p></div>
<!-- Facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo (qtrans_getLanguage() == 'ja')?"ja_JP":"en_US" ?>/all.js#xfbml=1&appId=624101920982827";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End Facebook -->
				<div id="wrapper">
					<div id="container">
						<?php if(qtrans_getLanguage() == 'en') : ?>
							<div id="header">
								<div class="top_text">
									<h1>Vietnam Tisk can transport hand-carried goods between Japan and Vietnam, or in Vietnam field, or from Vietnam to the other countries like China, Thailand, and so on.</h1>
									<div id="sel_lang">
										<?php 
											if (function_exists('qtrans_generateLanguageSelectCode')) { 
												echo qtrans_generateLanguageSelectCode('image'); 
											} 
										?>
									</div>
								</div>
								<div class="top">
									<a class="logo" href="<?php echo home_url('/'); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" width="305" height="61" />
									</a>
									<div class="top_banner">
										<a href="<?php echo get_permalink(71); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/info_top_en.jpg" alt="" /></a>
									</div>
									<div class="top_tel">
										<img src="<?php echo get_template_directory_uri(); ?>/images/contact_top_en.jpg" alt="" />
									</div>
								</div>
							</div>
							<!-- Menu -->
							<?php wp_nav_menu( array( 'theme_location' =>
							'primary', 'menu_class' => '', 'container_class' => '', 'container_id' =>'nav' ) ); ?>
						<?php elseif(qtrans_getLanguage() == 'ja'): ?>
							<div id="header">
								<div class="top_text">
									<h1>ティスクベトナムは日本とベトナム間のハンドキャリーやベトナム国内／ベトナムから中国やタイなどへのハンドキャリーも対応致します。</h1>
									<div id="sel_lang">
										<?php 
											if (function_exists('qtrans_generateLanguageSelectCode')) { 
												echo qtrans_generateLanguageSelectCode('image'); 
											} 
										?>
									</div>
								</div>
								<div class="top">
									<a class="logo" href="<?php echo home_url('/'); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" width="305" height="61" />
									</a>
									<div class="top_banner">
										<a href="<?php echo get_permalink(71); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/info_top.jpg" alt="" /></a>
									</div>
									<div class="top_tel">
										<img src="<?php echo get_template_directory_uri(); ?>/images/contact_top.jpg" alt="" />
									</div>
								</div>
							</div>
							<!-- Menu -->
							<?php wp_nav_menu( array( 'theme_location' =>
							'primary', 'menu_class' => '', 'container_class' => '', 'container_id' =>'nav' ) ); ?>
						<?php else: ?>	
							<div id="header">
								<div class="top_text">
									<h1>Tisk Việt Nam có thể vận chuyển hàng hoá xách tay giữa Nhật Bản và Việt Nam , trong lãnh thổ Việt Nam hoặc từ Việt Nam đến các nước như Trung Quốc, Thái Lan,...</h1>
									<div id="sel_lang">
										<?php 
											if (function_exists('qtrans_generateLanguageSelectCode')) { 
												echo qtrans_generateLanguageSelectCode('image'); 
											} 
										?>
									</div>
								</div>
								<div class="top">
									<a class="logo" href="<?php echo home_url('/'); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" width="305" height="61" />
									</a>
									<div class="top_banner">
										<a href="<?php echo get_permalink(71); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/info_top_vi.jpg" alt="" /></a>
									</div>
									<div class="top_tel">
										<img src="<?php echo get_template_directory_uri(); ?>/images/contact_top_vi.jpg" alt="" />
									</div>
								</div>
							</div>
							<!-- Menu -->
							<?php wp_nav_menu( array( 'theme_location' =>
							'primary', 'menu_class' => '', 'container_class' => '', 'container_id' =>'nav' ) ); ?>
							<?php endif ?>	