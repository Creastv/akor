<?php 
$inw = get_field( 'lokale' );

    $postsPerPage = 4;
     $table = array(
        'post_type' => 'lokale',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        // 'meta_key'       => 'status', // Klucz pola ACF
        // 'orderby'        => 'meta_value_num', 
        'order'          => 'ASC', 
        // 'tax_query' =>  array (
        //     array(
        //         'taxonomy' => 'inwestycje',
        //         'terms' => $inw->slug, 
        //         'field' => 'slug',
        //         'operator' => 'IN',
        //     ),
        // ), 
    );
$loop = new WP_Query($table);
?>
<table id="mieszkania-inw" cellspacing="0" class=" table table-hover" style="width:100%">
    <thead>
        <tr>

            <th data-priority="10" ></th>
            <th data-priority="1" class="name" >Numer</th>
            <th data-priority="2" >Powierzchnia</th>
            <th >Pokoje</th>
            <th class="cena" data-priority="3" >Cena</th>
            <th >Udogodnienia</th>
            <th >Status</th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php  if($loop->have_posts() ) : ?>
    <?php while ($loop->have_posts()) : $loop->the_post(); 
            get_template_part( '/templates-parts/content/content-lokale-table-single' );
    endwhile;
    else :
         echo '<h1 class="text-center">Nic nie znaleziono</h1>';
    endif;
    ?>
    </tbody>
</table>
