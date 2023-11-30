<?php
global $searchandfilter;
$sf_current_query = $searchandfilter->get(477)->current_query();
// $link = 'http://localhost/gemma/lokale';
$link = 'https://uat.gemma.waw.pl/wp/lokale/';

// $title = get_field( 'title', 'options' );
// $subtitle = get_field( 'subtitle', 'opinions' );
$title = 'Wyszukiwarka';
$subtitle = 'Znajdź swoje wymarzone miejsce';
get_header(); ?>
<?php if($title) : ?>
<header class="entry-header text-center">
    <h1 class="entry-title">
        <?php echo $title ? $title : false; ?>
    </h1>
    <?php echo $subtitle ? '<p>' . $subtitle  . '</p>': false; ?>
</header>
<?php endif; ?>
<div class="search-filters">
    <?php  echo do_shortcode('[searchandfilter id="462"]') ;?>
</div>

<?php 
if ( have_posts() ) : 
    get_template_part( 'templates-parts/content/content-lokale', 'table' ); 
?>
<?php else :
    echo "<h1 class='text-center'>Nic nie znaleziono</h1> ";
endif;

get_footer(); ?>
