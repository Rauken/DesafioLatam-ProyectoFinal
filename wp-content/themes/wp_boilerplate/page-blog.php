<?php get_header(); ?>
<div class="container">
    <div class="col-md-12 text-center text-white">
    <h1>BLOG</h1>

    </div>
</div>

<?php $query = new WP_Query( 'cat=-3,-8' ); ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

 <div class="container md-50">
     <div class="row mt-50 md-50">

        <div class="post tindog seccion1 text-shadow">
            <h2>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <div class="entry p-3">
                <?php the_content(); ?>
            </div>

        </div> <!-- closes the first div box -->
    </div>
 </div>
        <?php endwhile; 
        wp_reset_postdata();
        else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
<?php get_footer(); ?>