<!DOCTYPE html>
<html lang="en">


<!-- molla/index-4.html  22 Nov 2019 09:53:08 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/site.html">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    
   <?php wp_head(); ?>
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-4">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
				<?php $phone_number = get_field('phone_number', 'option'); ?>
				<?php if(!empty($phone_number)): ?>
                        <a href="tel:<?php echo $phone_number; ?>"><i class="icon-phone"></i>Call: <?php echo $phone_number; ?></a>
				<?php endif; ?>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    
                                    <li><a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a></li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->

                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        
				<?php $header_logo = get_field('header_logo', 'option');
				
				?>
				<?php if(!empty($header_logo)): ?>
                        <a href="<?php home_url(); ?>" class="logo">
                            <img src="<?php echo $header_logo['url']; ?>" alt="Molla Logo" width="105" height="25">
                        </a>
				<?php endif; ?>
				
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                   
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        
                    </div><!-- End .header-left -->

                    <div class="header-center">
				<nav class="main-nav">

					<?php
					wp_nav_menu(
					array(
						'container' => false,
						'menu' => 'head_menu',
						'menu_class'     => 'menu sf-arrows', 
					)
					);
					?>
                            
                           
				</nav><!-- End .main-nav -->
			</div><!-- End .header-center -->


			  <?php $offer_text = get_field('offer_text', 'option'); ?>
				<?php if(!empty($offer_text)): ?>
                    <div class="header-right">
                        <i class="la la-lightbulb-o"></i><?php echo $offer_text; ?>
                    </div>

			  <?php endif; ?>

                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->