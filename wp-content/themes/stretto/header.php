<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>
<!-- start -->
<div class="wrapper">
        <div class="main-container">
<!-- device menu -->
			<div class="mbnav d-md-none">
				<div class="mbnav__backdrop"></div>
				<!-- hamburger -->
				<a href="javascript:;" class="hamburger">
					<span class="hamburger__wrap">
						<span class="hamburger__line"></span>
						<span class="hamburger__line"></span>
						<span class="hamburger__line"></span>
					</span>
				</a>
				<div class="mbnav__state" data-clickable="true">
					<!-- menu header and hamburger -->
					<div class="mbnav__top">
						<div class="mbnav__logo">
							<span>Navigation</span>
						</div>
						<a href="javascript:;" class="hamburger close">
							<span class="hamburger__wrap">
								<span class="hamburger__line"></span>
								<span class="hamburger__line"></span>
							</span>
						</a>
					</div>
					<!--  main responsive menu -->
					<div class="mbnav__inner">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a>
								<!-- submenu level 2  -->
								<ul>
									<li><a href="#">About 2</a>
										<ul>
											<li><a href="#">About 3</a></li>
											<li><a href="#">About 3</a></li>
											<li><a href="#">About 3</a></li>
										</ul>
									</li>
									<li><a href="#">About 2</a>
										<!-- submenu level 3 -->
										<ul>
											<li><a href="#">About 3</a></li>
											<li><a href="#">About 3</a></li>
											<li><a href="#">About 3</a></li>
										</ul>
									</li>
									<li><a href="#">About 2</a></li>
								</ul>
							</li>
							<li><a href="#">Service</a>
								<ul>
									<li><a href="#">Service 2</a></li>
									<li><a href="#">Service 2</a>
										<ul>
											<li><a href="#">Service 3</a></li>
											<li><a href="#">Service 3</a></li>
											<li><a href="#">Service 3</a></li>
										</ul>
									</li>
									<li><a href="#">Service 2</a></li>
								</ul>
							</li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>

			<header class="main-header">
				<div class="header-utility-menu py-2">
					<div class="container-fluid d-flex justify-content-end">
						<nav class="navigation">
							<ul class="d-flex">
								<li><a href="#">Chapter 11 Cases</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Login</a></li>
							</ul>
						</nav>
						<div class="experience-dropdown d-flex align-items-center pl-3">
							<p class="m-0">Curated Experience For</p>
							<div class="custom-dropdown">
								<select name="" id="">
									<option value="">Bankruptcy Attorneys</option>
									<option value="">Corp. Restruct. Pros.</option>
									<option value="">Other Fiduciaries</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="header-main-menu py-2">
					<div class="container-fluid">
						<div class="row no-gutters">
							<div class="col-md-2">
								<a href="#" class="logo">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
								</a>
							</div>
							<div class="col-md-8 d-flex justify-content-center">
								<nav class="navigation">
									<ul class="d-flex">
										<li><a href="#">Our Experts</a></li>
										<li class="has-submenu"><a href="#">Solutions</a>
											<ul class="d-flex flex-column">
												<li><a href="#">Bankruptcy Solutions</a>
													<ul class="d-flex flex-column">
														<li><a href="#">Attorney Suite</a></li>
														<li><a href="#">Best Case</a></li>
														<li><a href="#">Trustee Suite</a></li>
														<li><a href="#">Debtor Education</a></li>
													</ul>
												</li>
												<li><a href="#">Financial Reporting</a></li>
											</ul>
										</li>
										<li class="has-submenu"><a href="#">Services</a>
											<ul class="d-flex flex-column">
												<li><a href="#">Bankruptcy Solutions</a>
													<ul class="d-flex flex-column">
														<li><a href="#">Attorney Suite</a></li>
														<li><a href="#">Best Case</a></li>
														<li><a href="#">Trustee Suite</a></li>
														<li><a href="#">Debtor Education</a></li>
													</ul>
												</li>
												<li><a href="#">Financial Reporting</a></li>
											</ul>
										</li>
										<li class="has-submenu"><a href="#">Insights</a>
											<ul class="d-flex flex-column">
												<li><a href="#">Bankruptcy Solutions</a>
													<ul class="d-flex flex-column">
														<li><a href="#">Attorney Suite</a></li>
														<li><a href="#">Best Case</a></li>
														<li><a href="#">Trustee Suite</a></li>
														<li><a href="#">Debtor Education</a></li>
													</ul>
												</li>
												<li><a href="#">Financial Reporting</a></li>
											</ul>
										</li>
										<li class="has-submenu"><a href="#">About</a>
											<ul class="d-flex flex-column">
												<li><a href="#">Bankruptcy Solutions</a>
													<ul class="d-flex flex-column">
														<li><a href="#">Attorney Suite</a></li>
														<li><a href="#">Best Case</a></li>
														<li><a href="#">Trustee Suite</a></li>
														<li><a href="#">Debtor Education</a></li>
													</ul>
												</li>
												<li><a href="#">Financial Reporting</a></li>
											</ul>
										</li>
										<li><a href="#">Contact</a></li>
									</ul>
								</nav>
							</div>
							<div class="col-md-2">
								<div class="search-container">
									<form action="">
										<input type="text" placeholder="Search.." name="search">
										<button type="submit"><i class="fa fa-search"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
            </header><!-- #site-header -->
