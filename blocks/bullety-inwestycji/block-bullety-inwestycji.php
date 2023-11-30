<?php
$id = 'bullets-inwestycji-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'bullets-inwestycji ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
   <div class="full">
    <?php if( have_rows('bullety') ): ?>
        <ul class="wraper">
        <?php while( have_rows('bullety') ): the_row(); 
            $ikona = get_sub_field('ikona');
            $bullet = get_sub_field('bullet');
            ?>
            <li>
                <?php echo wp_get_attachment_image( $ikona, 'full' ); ?>
                <p><?php echo $bullet; ?></p>
            </li>
        <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    </div>
</section>
