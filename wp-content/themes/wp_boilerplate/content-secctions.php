<?php
                $arg = array(
                'category_name'  => 'secciones',   
                'post_type'		 => 'Secciones',
                'posts_per_page' => 6
                );
                $get_arg = new WP_Query( $arg );
                while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
            ?>
            
            <div class="col-md-3 secciones mt-50">
            <?php $Imagen = get_field( 'imagen' ); ?>
            <?php $nombre = get_field( 'nombre' ); ?>
            <?php $link = get_field( 'link' ); ?>

            <?php if ( $Imagen ) { ?>
                <img src="<?php echo $Imagen['url']; ?>" alt="<?php echo $Imagen['alt']; ?>" class="circle image" />
                <div class="middle">
                    <a href="<?php the_field( 'link' ); ?>">
                        <div class="text">
                        <?php the_field( 'nombre' ); ?>
                        </div>
                    </a>
                </div>
                
            <?php } ?>        
            </div>
            <?php } wp_reset_postdata();?>