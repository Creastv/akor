<?php 
$inw = get_field('inwestycja');
$place = get_field( 'miejscowosc', $inw->ID );
$size = get_field( 'powierzchnia' );
$rooms = get_field( 'liczba_pokoi' );
$gellery = get_field( 'galeria' );

?>


<article id="post-<?php the_ID(); ?>" class="single-lokal hentry">
   
    
     <div class="back">
        <a onclick="history.back()" href="#">
            <svg width="34" height="34" id="Warstwa_1" data-name="Warstwa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 69.86 62.26">
            <path d="M13.78,18.86c1.1,1.65,2.14,3.12,3.09,4.65,1.43,2.29,.37,5.23-2.16,6.02-1.78,.56-3.38,.11-4.54-1.3C6.9,24.26,3.7,20.21,.49,16.17c-.74-.93-.63-1.82,.24-2.91C3.45,9.85,6.18,6.44,8.91,3.04c.38-.47,.74-.95,1.13-1.41C11.56-.17,14.09-.53,15.88,.8c1.8,1.33,2.15,3.71,.83,5.72-.93,1.41-1.88,2.81-2.92,4.36,.47,0,.78,0,1.1,0,9.61,0,19.22-.02,28.83,0,7.56,.02,14.06,2.65,19.24,8.2,4.9,5.25,7.19,11.55,6.87,18.7-.54,12.08-9.48,22.08-21.43,24.08-1.32,.22-2.67,.32-4.01,.35-2.94,.05-5.88,.04-8.81,.01-1.98-.02-3.69-1.5-3.92-3.33-.26-2.09,.86-3.9,2.81-4.44,.52-.14,1.08-.15,1.63-.16,3.1-.04,6.21,.05,9.31-.11,7.49-.38,14-5.76,15.91-13.01,2.66-10.08-3.75-20.19-13.99-22.04-1.15-.21-2.35-.26-3.52-.26-9.72-.02-19.44-.01-29.16-.01-.22,0-.44,0-.85,0Z"/>
            </svg>
            <span>wróć</span>
        </a>
    </div>
    <?php get_template_part( 'templates-parts/header/header', 'title' );  ?>
    
    <div class="l-info">
        <ul>
            <?php echo $inw ? '<li><p><span>Nazwa inwestycji:</span> <b>' . $inw->post_title . '</b></p></li>' : false;  ?>
            <?php echo $place ? '<li><p><span>Miejscowość:</span> <b>' . $place . '</b></p></li>' : false; ?>
            <?php echo $size ? '<li><p><span>Powierzchnia:</span> <b>' . $size . ' m<sup>2</sup></b></p></li>' : false; ?>
            <?php echo $rooms ? '<li><p><span>Liczba pokoi:</span> <b>' . $rooms . '</b> </p></li>' : false; ?>
        </ul>
    </div>
    <div class="l-action">
        <div class="l-action__wrap">
            <div class="col">
                <div class="col_wrap">
                    <div class="galleria">
                        <?php if($gellery) : $i=1 ?>
                            <div class="holder">
                            <?php foreach( $gellery as $image ): ?>
                                <div class="slides">
                                    <a data-fancybox="gallery" href="<?php echo esc_url($image['sizes']['large']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                     </a>
                                </div>
                            <?php endforeach; ?>
                            </div>
                            <div class="prevContainer"><a class="prev" onclick="plusSlides(-1)">
                            <svg viewBox="0 0 24 24">
                                <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                            </svg>
                                </a></div>
                            <div class="nextContainer"><a class="next" onclick="plusSlides(1)">
                                <svg viewBox="0 0 24 24">
                            <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                            </svg>
                                </a>
                        </div>
                            <div class="thumbnails">
                            <?php foreach( $gellery as $image ): ?>
                                <div class="thumbnail">
                                    <img class="slide-thumbnail" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" onclick="currentSlide(<?php echo $i; ?>)" >
                                </div>
                            <?php $i++;  endforeach; ?>
                                <div class="buttons text-right">
                                    <a href="#" class="btn-revers">Pobierz PDF</a>
                                </div>
                            </div>
                        <?php else : ?>
                            <?php if ( has_post_thumbnail()  )  : ?>
                                    <?php echo the_post_thumbnail('post-blog');?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri()."/src/img/thumbnail.png"; ?>" width="400" height="250" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <div class="buttons text-right">
                                <a href="#" class="btn-revers">Pobierz PDF</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="l-form">
                    <div class="l-form-header text-center">
                        <h2>Zapytaj o mieszkanie</h2>
                        <p>Zostaw swoje dane, a my odezwiemy się do Ciebie w ciągu 24 godz.</p>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="e39735c" title="Formularz lokal"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>