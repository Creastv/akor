<?php
$link = get_field( 'link', 'options' );
?>
<?php if($link) : ?>
<div class="f__img">
    <?php echo $link['url'] ? '<a href="' . $link['url']  . '" target="_blank">' : false; ?>
    <?php if(  $link['img'] ) {
        echo wp_get_attachment_image( $link['img'], 'full' );
    } ?>
    <?php echo $link['url'] ? '</a>' : false; ?>
</div>
<?php endif; ?>