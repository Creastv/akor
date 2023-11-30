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