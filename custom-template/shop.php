<?php 
/* Template Name: Shop Page */ 

get_header();
?>

<main class="main">
       <div class="container">
                        <div class="row">
<?php echo do_shortcode('[products columns="4"]'); ?>
</div>
</div>

    </main>

<?php get_footer(); ?>