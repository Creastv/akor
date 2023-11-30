<?php 
$image = get_field( 'zdjecie' );
$place = get_field( 'miejscowosc' );
$title = get_field( 'tytul' );
$desc = get_field( 'opis' );
$link = get_field( 'link' );
$bullets = get_field( 'zalety' );
$style = get_field( 'pozycja_zdjecia' );
$position = '';
if($style == 'Prawa') :
    $position = 'right';
endif;

if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
?>
<div class="inwestycja">
    <div class="inwestycja_wraper <?php echo $position; ?>">
        <div class="col">
            <div class="img">
                <?php if($image ) : ?>
                <?php echo wp_get_attachment_image( $image, 'large' ); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col">
        <div class="content">
            <div class="number">
                <?php if($place) : ?>
                <p><?php echo  $place['numer'] ? '<span>' . $place['numer'] . '</span>' : false; ?>/ <?php echo $place['lokalizacja'] ? $place['lokalizacja'] : false; ?></p>
                <?php endif; ?>
            </div>
            <?php echo $title ? '<h2>' . $title  . '</h2>' : false; ?>
            <?php echo $desc ? '<p>' . $desc  . '</p>' : false; ?>
            <?php if($bullets) : ?>
                <div class="bullets">
                    <ul>
                    <?php foreach($bullets as $bullet) : ?>
                        <li>
                        <?php echo $bullet['ikona'] ? wp_get_attachment_image( $bullet['ikona'], 'full' ) : false; ?>
                        <?php echo $bullet['opis'] ? '<p>' . $bullet['opis'] . '</p>': false; ?>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if($link) : ?>
            <div class="button">
                 <a class="btn-revers" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            </div>
            <?php endif; ?>
        </div>
        </div>
    </div>
</div>

