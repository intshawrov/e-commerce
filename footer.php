   <footer class="footer">
            <div class="cta bg-image bg-dark pt-4 pb-5 mb-0" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demos/demo-4/bg-5.jpg);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <div class="cta-heading text-center">
                                <h3 class="cta-title text-white">Get The Latest Deals</h3><!-- End .cta-title -->
                                <p class="cta-desc text-white">and receive <span class="font-weight-normal">$20 coupon</span> for first shopping</p><!-- End .cta-desc -->
                            </div><!-- End .text-center -->
                        
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><span>Subscribe</span><i class="icon-long-arrow-right"></i></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                        </div><!-- End .col-sm-10 col-md-8 col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cta -->
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget widget-about">

                                <?php $footer_image = get_field('footer_image', 'option'); ?>
                                <?php if(!empty($footer_image)): ?>
	            				<img src="<?php echo $footer_image['url']; ?>" class="footer-logo" alt="Footer Logo" width="105" height="25">
                                <?php endif; ?>

                                <?php $short_content = get_field('short_content', 'option'); ?>
	            				<p><?php echo $short_content; ?></p>


                                <?php $footer_phone_number = get_field('footer_phone_number', 'option'); ?>
	            				<div class="widget-call">
                                    <i class="icon-phone"></i>
                                    Got Question? Call us 24/7
                                    <a href="tel:#"><?php echo $footer_phone_number; ?></a>         
                                </div><!-- End .widget-call -->
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">

                        <?php $useful_links = get_field('useful_links', 'option'); ?>

	            			<div class="widget">
	            				<?php echo $useful_links; ?>
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">

                        <?php $customer_service = get_field('customer_service', 'option'); ?>
	            			<div class="widget">
	            				<?php echo $customer_service; ?>
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">

                        <?php $my_account = get_field('my_account', 'option'); ?>
	            			<div class="widget">
	            				<?php echo $my_account; ?>
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
                    <?php $copyright_text = get_field('copyright_text', 'option'); ?>
	        		<p class="footer-copyright"><?php echo $copyright_text; ?></p><!-- End .footer-copyright -->
	        		<figure class="footer-payments">
	        			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/payments.png" alt="Payment methods" width="272" height="20">
	        		</figure><!-- End .footer-payments -->
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>


    
   

</body>

   <?php wp_footer(); ?>

<!-- molla/index-4.html  22 Nov 2019 09:54:18 GMT -->
</html>