<?php 
$place = get_field( 'miejscowosc', $post->ID);
$locals = get_field( 'ilosc_budynkow', $post->ID);
?>
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