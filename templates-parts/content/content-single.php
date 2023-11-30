<?php
$categories = get_the_category();
$numCat = count($categories);
$post_link = get_permalink();

$arr = new WP_Query( array(
        'post_type' => 'Post',
        'posts_per_page' => 3,
        'order' => 'DESC',
        'post__not_in' => array( get_the_ID() )
));

?>
<article id="post-<?php the_ID(); ?>" class="single-post hentry">
    <header class="entry-header">
        <h1 class="entry-title ">
            <?php the_title(); ?>
        </h1>
         <div class="meta-pub">
            <time class="meta meta-data-pub published" datetime="<?php the_time() ?>"> <span><?php the_time('d.m.Y');?></span></time>
        </div>
        </div>
        <div class="img-wraper">
            <div class="img">
                <?php the_post_thumbnail(); ?>
            </div>
        </div>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    </footer>
</article>
