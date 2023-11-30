<?php
get_header();
while ( have_posts() ) : the_post();
if(is_singular('inw-zrealizowane')) :
	get_template_part( 'templates-parts/content/content-inw', 'zrealizowane' );
elseif(is_singular('inwestycje')) :
    get_template_part( 'templates-parts/content/content', 'inwestycje' );
elseif(is_singular('lokale')) :
    get_template_part( 'templates-parts/content/content', 'lokale' );
else :
	get_template_part( 'templates-parts/content/content', 'single' );
endif;
endwhile;
get_footer();
