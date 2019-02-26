<?php
    $arg = array(
        'category_name'  => 'Galeria',   
        'post_type'		 => 'galeria',
        'posts_per_page' => 0
        );
    $get_arg = new WP_Query( $arg );
    while ( $get_arg->have_posts() ) {
        $get_arg->the_post();
        ?>
            
        <?php $Imagen = get_field( 'imagen' ); ?>
            <?php if ( $Imagen ) { ?>
                    <div class="gg-element">
                        <img src="<?php echo $Imagen['url']; ?>" alt=""/>
                    </div>
                <?php } ?>
            
            <?php } wp_reset_postdata();?>
