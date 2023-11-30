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
        <?php while ( have_posts() ) : the_post(); 
    get_template_part( 'templates-parts/content/content-lokale-table', 'single' ); 
    endwhile; ?>
    </tbody>
</table>

