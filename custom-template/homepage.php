<?php 
/* Template Name: Home Page */ 

get_header();
?>


        <main class="main">
            <div class="intro-slider-container mb-5">
                <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" 
                    data-owl-options='{
                        "dots": true,
                        "nav": false, 
                        "responsive": {
                            "1200": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>

                    <?php $homepage_banner_section = get_field('homepage_banner_section');
                                $slider_section = $homepage_banner_section['slider_section'];
                        if(!empty($slider_section)):
                            foreach ($slider_section as $slider):
                            $button = $slider['button'];
                            $button_title = $button['title'];
                            $button_url = $button['url'];
                            $button_target = $button['target'];
                            if(!empty($slider['image']['url']) || !empty($slider['subtitle']) || !empty($slider['title']) || !empty($slider['intro_title']) ):

                        ?>
                    <div class="intro-slide" style="background-image: url(<?php echo $slider['image']['url']; ?>);">
                        <div class="container intro-content">
                            <div class="row justify-content-end">
                                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                    <h3 class="intro-subtitle text-third"><?php echo $slider['subtitle']; ?></h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title"><?php echo $slider['title']; ?></h1>
                                    <h1 class="intro-title"><?php echo $slider['intro_title']; ?></h1><!-- End .intro-title -->

                                    <?php if(!empty($price)): ?>
                                    <div class="intro-price">
                                    <?php echo $slider['price']; ?>
                                    </div><!-- End .intro-price -->
                                    <?php endif; ?>

                                    <a href="<?php echo $button_url; ?>" class="btn btn-primary btn-round">
                                        <span><?php echo $button_title; ?></span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-lg-11 offset-lg-1 -->
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                           
                         <?php
                        endif; 
                        endforeach;
                         endif; 
                          ?>

                    
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="container">

            <?php $explore_popular_metabox = get_field('explore_popular_metabox'); ?> 
          <?php 
            if ( !empty($explore_popular_metabox['explore_popular_categories']) ) {
                echo '<h2 class="title text-center mb-4">' . esc_html($explore_popular_metabox['explore_popular_categories']) . '</h2>';
            }
            ?>
           

    <div class="cat-blocks-container">
        <?php echo do_shortcode('[product_categories ids="37,36,38,39,40,41" number="6" columns="6" orderby="name" order="ASC" hide_empty="false"]'); ?>
    </div>
</div>


            <div class="mb-4"></div><!-- End .mb-4 -->

            <?php
                $banner_1 = $explore_popular_metabox['banner_1'];
                $banner_2 = $explore_popular_metabox['banner_2'];
                $banner_3 = $explore_popular_metabox['banner_3'];

            ?>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay banner-overlay-light">
                            <a href="#">
                                <img src="<?php echo $banner_1['url']; ?>" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle"><a href="#">Smart Offer</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#">Save $150 <strong>on Samsung <br>Galaxy Note9</strong></a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay banner-overlay-light">
                            <a href="#">
                                <img src="<?php echo $banner_2['url']; ?>" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle"><a href="#">Time Deals</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#"><strong>Bose SoundSport</strong> <br>Time Deal -30%</a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay banner-overlay-light">
                            <a href="#">
                                <img src="<?php echo $banner_3['url']; ?>" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle"><a href="#">Clearance</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#"><strong>GoPro - Fusion 360</strong> <br>Save $70</a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-3"></div><!-- End .mb-5 -->

            <div class="container new-arrivals">
                <div class="heading heading-flex mb-3">
                    <div class="heading-left">
                        <h2 class="title">New Arrivals</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                    

                  
                </div><!-- End .heading -->
                 <?php echo do_shortcode('[child_category_tabs_all parent="popular-category" limit="12"[columns="6"]'); ?>

                
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- End .mb-6 -->

            <?php $offer_sales_section = get_field('offer_sales_section'); 

                $banner_image = $offer_sales_section['banner_image'];
                $product_image = $offer_sales_section['product_image'];
                $content = $offer_sales_section['content'];
                $button_link = $offer_sales_section['button_link'];
                $button_title = $button_link['title'];
                $button_url = $button_link['url'];
                $button_target = $button_link['target'];

                ?>



            <div class="container">
                <div class="cta cta-border mb-5" style="background-image: url(<?php echo $banner_image['url']; ?>)">
                    <img src="<?php echo $product_image['url']; ?>" alt="camera" class="cta-img">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="cta-content">
                                <div class="cta-text text-right text-white">
                                    <?php echo $content; ?>
                                </div><!-- End .cta-text -->
                                <a href="#" class="btn btn-primary btn-round"><span><?php echo $button_title; ?></span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .cta-content -->
                        </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .cta -->
            </div><!-- End .container -->

            <div class="container">
                <div class="heading text-center mb-3">
                    <h2 class="title">Deals & Outlet</h2><!-- End .title -->
                    <p class="title-desc">Today’s deal and more</p><!-- End .title-desc -->
                </div><!-- End .heading -->


                <?php $outlet_section = get_field('outlet_section');

                $banner_image_2 = $outlet_section['banner_image_2'];
                $banner2_content = $outlet_section['banner2_content'];
                
                $banner_image_3 = $outlet_section['banner_image_3'];
                $banner3_content = $outlet_section['banner3_content'];


                ?>


                <div class="row">
                    <div class="col-lg-6 deal-col">
                        <div class="deal" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demos/demo-4/deal/bg-1.jpg');">
                            <div class="deal-top">
                                <h2>Deal of the Day.</h2>
                                <h4>Limited quantities. </h4>
                            </div><!-- End .deal-top -->

                            <div class="deal-content">
                                <h3 class="product-title"><a href="product.html">Home Smart Speaker with  Google Assistant</a></h3><!-- End .product-title -->

                                <div class="product-price">
                                    <span class="new-price">$129.00</span>
                                    <span class="old-price">Was $150.99</span>
                                </div><!-- End .product-price -->

                                <a href="product.html" class="btn btn-link"><span>Shop Now</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .deal-content -->

                            <div class="deal-bottom">
                                <div class="deal-countdown daily-deal-countdown" data-until="+10h"></div><!-- End .deal-countdown -->
                            </div><!-- End .deal-bottom -->
                        </div><!-- End .deal -->
                    </div><!-- End .col-lg-6 -->

                    <div class="col-lg-6 deal-col">
                        <div class="deal" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demos/demo-4/deal/bg-2.jpg');">
                            <div class="deal-top">
                                <h2>Your Exclusive Offers.</h2>
                                <h4>Sign in to see amazing deals.</h4>
                            </div><!-- End .deal-top -->

                            <div class="deal-content">
                                <h3 class="product-title"><a href="product.html">Certified Wireless Charging  Pad for iPhone / Android</a></h3><!-- End .product-title -->

                                <div class="product-price">
                                    <span class="new-price">$29.99</span>
                                </div><!-- End .product-price -->

                                <a href="login.html" class="btn btn-link"><span>Sign In and Save money</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .deal-content -->

                            <div class="deal-bottom">
                                <div class="deal-countdown offer-countdown" data-until="+11d"></div><!-- End .deal-countdown -->
                            </div><!-- End .deal-bottom -->
                        </div><!-- End .deal -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->

                <div class="more-container text-center mt-1 mb-5">
                    <a href="#" class="btn btn-outline-dark-2 btn-round btn-more"><span>Shop more Outlet deals</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- End .more-container -->
            </div><!-- End .container -->

            <div class="container">
                <hr class="mb-0">
                <div class="owl-carousel mt-5 mb-5 owl-simple" data-toggle="owl" 
                    data-owl-options='{
                        "nav": false, 
                        "dots": false,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            }
                        }
                    }'>
                    <?php

                    $logo_slider = get_field('logo_slider');

                    if(!empty($logo_slider)):
                    foreach ($logo_slider as $logo):
                        if(!empty($logo['logo']['url'])):

                   

                    ?>

                    <a href="#" class="brand">
                        <img src="<?php echo $logo['logo']['url']; ?>" alt="Brand Name">
                    </a>

                    <?php
                        endif;
                        endforeach;
                        endif; 
                    ?>
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->

            <div class="bg-light pt-5 pb-6">
                <div class="container trending-products">
                    <div class="heading heading-flex mb-3">
                        <div class="heading-left">
                            <h2 class="title">Trending Products</h2><!-- End .title -->
                        </div><!-- End .heading-left -->

                       <div class="heading-right">
                            <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="trending-top-link" data-toggle="tab" href="#trending-top-tab" role="tab" aria-controls="trending-top-tab" aria-selected="true">Top Rated</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="trending-best-link" data-toggle="tab" href="#trending-best-tab" role="tab" aria-controls="trending-best-tab" aria-selected="false">Best Selling</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="trending-sale-link" data-toggle="tab" href="#trending-sale-tab" role="tab" aria-controls="trending-sale-tab" aria-selected="false">On Sale</a>
                                </li>
                            </ul>
                       </div><!-- End .heading-right -->
                    </div><!-- End .heading -->


                    <?php $trending_products =get_field('trending_products');
                    $image_banner = $trending_products['image_banner'];
                    ?>

                    <div class="row">
                        <?php if(!empty($image_banner)): ?>
                        <div class="col-xl-5col d-none d-xl-block">
                            <div class="banner">
                                <a href="#">
                                    <img src="<?php echo $image_banner['url']; ?>" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-xl-5col -->
                        <?php endif; ?>

                        <div class="col-xl-4-5col">
                            <div class="tab-content tab-content-carousel just-action-icons-sm">
                                <div class="tab-pane p-0 fade show active" id="trending-top-tab" role="tabpanel" aria-labelledby="trending-top-link">
                                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                        data-owl-options='{
                                            "nav": true, 
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>




                                        <?php 
                                        $args = array(
                                            'post_type' => 'product',
                                            'post_per_pages' => -1,
                                            'order' => 'DESC',
                                            'tax_query' => array(
                                                array(
                                                'taxonomy' => 'product_cat',
                                                'field' => 'slug',
                                                'terms' => 'top-rated',
                                            ),
                                        ),
                                    );

                                    $top_rated_query = new WP_Query($args);

                                    if($top_rated_query->have_posts()):
                                        while($top_rated_query->have_posts()):
                                            $top_rated_query->the_post();
                                            global $product;
                                            ?>





                                        <div class="product product-2">
                                            <figure class="product-media">

                                            <a href="<?php the_permalink(); ?>"><?php echo $product->get_image(); ?></a>
                                               

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                    <a href="<?php the_permalink(); ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <?php echo wc_get_product_category_list($product->get_id()); ?>

                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <?php echo $product->get_price_html(); ?>
                                                </div><!-- End .product-price -->
                                                
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <?php endwhile; 
                                        wp_reset_postdata(); 
                                        endif; 
                                        ?>
                                        
                                <div class="tab-pane p-0 fade" id="trending-best-tab" role="tabpanel" aria-labelledby="trending-best-link">
                                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                        data-owl-options='{
                                            "nav": true, 
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>
 
                                        <?php 
                                        $args = array(
                                            'post_type' => 'product',
                                            'post_per_page' => -1,
                                            'order' => 'DESC',
                                            'tax_query' => array(
                                                array(
                                                'taxonomy' => 'product_cat',
                                                'field' => 'slug',
                                                'terms' => 'best-selling',
                                            ),
                                        ),
                                    );

                                    $best_selling_query = new WP_Query($args);


                                    if($best_selling_query->have_posts()):
                                        while($best_selling_query->have_posts()):
                                            $best_selling_query->the_post();
                                            global $product;
                                            ?>
                                        <div class="product product-2">
                                            <figure class="product-media">
                                            <a href="<?php the_permalink(); ?> "><?php echo $product->get_image(); ?></a>
                                                

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                    <a href="<?php the_permalink(); ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <?php echo wc_get_product_category_list($product->get_id()); ?>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <?php echo $product->get_price_html(); ?>
                                                </div><!-- End .product-price -->
                                                
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <?php endwhile;
                                        wp_reset_postdata();

                                        endif; ?>





                                       
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane p-0 fade" id="trending-sale-tab" role="tabpanel" aria-labelledby="trending-sale-link">
                                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                        data-owl-options='{
                                            "nav": true, 
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>
                                         <?php 
                                        $args = array(
                                            'post_type' => 'product',
                                            'post_per_pages' => -1,
                                            'order' => 'DESC',
                                            'tax_query' => array(
                                                array(
                                                'taxonomy' => 'product_cat',
                                                'field' => 'slug',
                                                'terms' => 'on-sale',
                                            ),
                                        ),
                                    );

                                    $on_sale_query = new WP_Query($args);

                                    if($on_sale_query->have_posts()):
                                        while($on_sale_query->have_posts()):
                                            $on_sale_query->the_post();
                                            global $product;
                                            ?>





                                        <div class="product product-2">
                                            <figure class="product-media">

                                            <a href="<?php the_permalink(); ?>"><?php echo $product->get_image(); ?></a>
                                               

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                    <a href="<?php the_permalink(); ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <?php echo wc_get_product_category_list($product->get_id()); ?>

                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <?php echo $product->get_price_html(); ?>
                                                </div><!-- End .product-price -->
                                                
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <?php endwhile; 
                                        wp_reset_postdata(); 
                                        endif; 
                                        ?>


                                    
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .col-xl-4-5col -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-light pt-5 pb-6 -->

            <div class="mb-5"></div><!-- End .mb-5 -->

            <div class="container for-you">
                <div class="heading heading-flex mb-3">
                    <div class="heading-left">
                        <h2 class="title">Recommendation For You</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                   <div class="heading-right">
                        <a href="#" class="title-link">View All Recommendadion <i class="icon-long-arrow-right"></i></a>
                   </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <div class="products">
                    <?php echo do_shortcode('[products limit="4" columns="4"]'); ?>


                </div><!-- End .products -->
            </div><!-- End .container -->

            <div class="mb-4"></div><!-- End .mb-4 -->

            <div class="container">
                <hr class="mb-0">
            </div><!-- End .container -->

            <div class="icon-boxes-container bg-transparent">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rocket"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                    <p>Orders $50 or more</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rotate-left"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                    <p>Within 30 days</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-info-circle"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                    <p>when you sign up</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-life-ring"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                    <p>24/7 amazing services</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .icon-boxes-container -->
        </main><!-- End .main -->

     <?php get_footer(); ?>