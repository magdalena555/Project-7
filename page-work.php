<?php get_header();  ?>

<div class="main">
    <div class="container">
        <div class="content">
            
            <img src="" alt="">
            <?php // Start the loop ?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

            <?php endwhile; // end the loop?>
        </div> <!-- /,content -->

     </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>