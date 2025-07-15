<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iptvsmart
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	 <!-- Start Navbar Area -->
	 <div class="navbar-area">
		<div class="pakap-responsive-nav">
            <div class="container">
                <div class="pakap-responsive-menu mean-container">
					<div class="mean-bar">
						<a href="#nav" class="meanmenu-reveal" style="right:0;left:auto;">
							<span></span>
							<span></span>
							<span></span>
						</a>
						<nav class="mean-nav">
							<ul class="navbar-nav">
								<li class="nav-item"><a href="<?php echo home_url(); ?>" class="nav-link active">Home</a></li>
								<li class="nav-item"><a href="<?php echo home_url('/about-us'); ?>" class="nav-link">About Us</a></li>
								<li class="nav-item"><a href="<?php echo home_url('/services'); ?>" class="nav-link">Services</a></li>
								<li class="nav-item"><a href="<?php echo home_url('/pricing'); ?>" class="nav-link">Pricing</a></li>
								<li class="nav-item"><a href="<?php echo home_url('/faq'); ?>" class="nav-link">FAQ</a></li>
								<li class="nav-item"><a href="<?php echo home_url('/testimonials'); ?>" class="nav-link">Testimonials</a></li>
								<li class="nav-item"><a href="<?php echo home_url('/contact-us'); ?>" class="nav-link">Contact Us</a></li>
							</ul>
						</nav>
					</div>
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">
							<img src="<?php echo bloginfo('template_directory'); ?>/assets/img/new/logo.jpg" alt="logo" class="img-fluid" style="width: 60%;">
						</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="pakap-nav">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
						<img src="<?php echo bloginfo('template_directory'); ?>/assets/img/new/logo.jpg" alt="logo" class="img-fluid" style="width: 80%;">
					</a>
                    <div class="collapse navbar-collapse mean-menu">
						<ul class="navbar-nav">
							<li class="nav-item"><a href="<?php echo home_url(); ?>" class="nav-link active">Home</a></li>
							<li class="nav-item"><a href="<?php echo home_url('/about-us'); ?>" class="nav-link">About Us</a></li>
							<li class="nav-item"><a href="<?php echo home_url('/services'); ?>" class="nav-link">Services</a></li>
							<li class="nav-item"><a href="<?php echo home_url('/pricing'); ?>" class="nav-link">Pricing</a></li>
							<li class="nav-item"><a href="<?php echo home_url('/faq'); ?>" class="nav-link">FAQ</a></li>
							<li class="nav-item"><a href="<?php echo home_url('/testimonials'); ?>" class="nav-link">Testimonials</a></li>
							<li class="nav-item"><a href="<?php echo home_url('/contact-us'); ?>" class="nav-link">Contact Us</a></li>
						</ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->