<?php
$id = $block['id'];

$way = get_field( 'sposob_dodawania_postow' );
$pos = get_field( 'posty' );

$style = get_field( 'styl_karty' );
$postPerPage = get_field( 'posts_per_page' );
$postType = get_field( 'typ_postow' );
$posts = new WP_Query( array(
        'post_type' => $postType,
        'posts_per_page' => $postPerPage,
        'order' => 'DESC',
));




?>

<section id="<?php echo $id; ?>" class="articles">

<?php if($way == 1) : ?>
    <?php if($posts) { ?>
        <div class="row">
            <div class="posts-wraper">
                <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <?php if($style == 'Inwestycja') : ?>
                    <?php   get_template_part( 'templates-parts/content/content', 'index-inw' );  ?>
                <?php else : ?>
                    <?php   get_template_part( 'templates-parts/content/content', 'index' );  ?>
                <?php endif; ?>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    <?php } ?>
<?php else : ?>
<?php if( $pos ): $num_cols = count( $pos );?>
    
    <div class="row">
        <div class="posts-wraper rows-<?php echo $num_cols; ?>">
        <?php foreach( $pos as $post ): 
           $inf = get_field('informacje', $post->ID);
           $place = get_field( 'miejscowosc', $post->ID);
           $locals = get_field( 'ilosc_budynkow', $post->ID);

        ?>
           <?php if($style == 'Inwestycja') : ?>
           <article id="post-<?php the_ID(); ?>" <?php post_class('post-inw'); ?>>
                <div class="post-item__wraper">
                    <a href="<?php echo get_the_permalink($post->ID); ?>">
                        <?php if ( has_post_thumbnail($post->ID)  )  : ?>
                            <?php echo get_the_post_thumbnail($post->ID,  'post-inwestycja');?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri()."/src/img/thumbnail-inw.png"; ?>" width="460" height="460" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </a>
                    <div class="wraper">
                        <h2 class="entry-title">
                            <a href="<?php echo get_the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a>
                        </h2>
                        <div class="entry-content">
                            <ul class="inf">
                                 <?php echo $place ? '<li><span>Miejscowość: <b>' . $place . '</b></span></li>' : false; ?>
                                <?php echo $locals ? '<li><span>Lokali: <b>' . $locals . '</b></span></li>' : false; ?>
                            </ul>
                            <a href="<?php echo get_the_permalink($post->ID); ?>"> Czytaj wiecej...</a>
                        </div>
                    </div>
                </div>
            </article>
            <?php else: ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
                    <div class="post-item__wraper">
                        <header>
                            <a href="<?php echo get_the_permalink($post->ID); ?>">
                                <?php if ( has_post_thumbnail()  )  : ?>
                                    <?php echo the_post_thumbnail('post-blog');?>
                                <?php else: ?>
                                <img src="<?php echo get_template_directory_uri()."/src/img/thumbnail.png"; ?>" width="400" height="250" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                            </a>
                        </header>
                        <div class="content">
                            <h2 class="entry-title">
                                <a href="<?php echo get_the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a>
                            </h2>
                            <p><?php echo  get_the_excerpt($post->ID); ?></p>
                            <div class="btn-wraper">
                                <a href="<?php echo get_the_permalink($post->ID); ?>"> Czytaj więcej</a>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    </div>
    <?php 
    wp_reset_postdata(); ?>
<?php endif; ?>
<?php endif; ?>
</section>